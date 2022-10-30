<?php

namespace libphonenumber\buildtools;

use libphonenumber\buildtools\Commands\BuildMetadataPHPFromXMLCommand;
use Symfony\Component\Console\Application;

class BuildApplication extends Application
{
    public const VERSION = '5';

    public function __construct()
    {
        parent::__construct('libphonenumber Data Builder', self::VERSION);

        $this->addCommands(
            [
                new BuildMetadataPHPFromXMLCommand(),
            ]
        );
    }
}
