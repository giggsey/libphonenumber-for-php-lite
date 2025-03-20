<?php

declare(strict_types=1);

namespace libphonenumber\buildtools\Commands;

use libphonenumber\buildtools\BuildMetadataPHPFromXml;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

#[AsCommand(
    name: 'build',
    description: 'Build all metadata data',
)]
class BuildCommand extends Command
{
    private const GIT_REPO = 'https://github.com/google/libphonenumber.git';
    private const GIT_PATH = __DIR__ . '/../../libphonenumber-data-dir/';

    private const DIRECTORIES = [
        'core' => __DIR__ . '/../../src/data/',
        'test_core' => __DIR__ . '/../../tests/core/data/',
    ];

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->cleanupData($output);
        $output->writeln('');

        $this->pullRepo($output);
        $output->writeln('');

        $this->compileTestData($output);
        $output->writeln('');

        $this->buildPhoneMetadata($output);
        $output->writeln('');

        $this->buildShortMetadata($output);
        $output->writeln('');

        return static::SUCCESS;
    }

    private function cleanupData(OutputInterface $output): void
    {
        $fileSystem = new Filesystem();

        $progressBar = new ProgressBar($output, count(self::DIRECTORIES));

        $output->writeln('Cleaning up directories');

        foreach (self::DIRECTORIES as $directory) {
            $progressBar->advance();
            $fileSystem->remove($directory);
            $fileSystem->mkdir($directory);
        }

        $progressBar->finish();
        $output->writeln('');
    }

    private function compileTestData(OutputInterface $output): void
    {
        $output->writeln('Compiling test metadata');

        (new BuildMetadataPHPFromXml())->start(
            $this->getGitPath('resources/PhoneNumberMetadataForTesting.xml'),
            self::DIRECTORIES['test_core'],
            'libphonenumber\\Tests\\core\\data\\PhoneNumberMetadataForTesting',
            'CountryCodeToRegionCodeMapForTesting',
            'src/',
        );
    }

    private function buildPhoneMetadata(OutputInterface $output): void
    {
        $output->writeln('Compiling phone metadata');

        (new BuildMetadataPHPFromXml())->start(
            $this->getGitPath('resources/PhoneNumberMetadata.xml'),
            self::DIRECTORIES['core'],
            'libphonenumber\\data\\PhoneNumberMetadata',
            'CountryCodeToRegionCodeMap',
            'src/',
        );
    }

    private function buildShortMetadata(OutputInterface $output): void
    {
        $output->writeln('Compiling short phone number metadata');

        (new BuildMetadataPHPFromXml())->start(
            $this->getGitPath('resources/ShortNumberMetadata.xml'),
            self::DIRECTORIES['core'],
            'libphonenumber\\data\\ShortNumberMetadata',
            'ShortNumbersRegionCodeSet',
            'src/',
        );
    }

    private function getGitPath(string $path): string
    {
        return self::GIT_PATH . $path;
    }

    private function pullRepo(OutputInterface $output): void
    {
        $metadataVersion = require __DIR__ . '/../../METADATA-VERSION.php';

        if (!is_dir(self::GIT_PATH)) {
            $output->writeln('Cloning libphonenumber from ' . self::GIT_REPO);
            (new Process(['git', 'clone', self::GIT_REPO, self::GIT_PATH]))->mustRun();
        } else {
            $output->writeln('Pulling libphonenumber from ' . self::GIT_REPO);
            (new Process(['git', '-C', self::GIT_PATH, 'fetch', '--all']))->mustRun();
        }

        $output->writeln('Checking out libphonenumber ' . $metadataVersion);
        (new Process(['git', '-C', self::GIT_PATH, 'checkout', $metadataVersion, '--force']))->mustRun();
    }
}
