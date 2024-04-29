<?php

declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules(
    [
        '@PSR2' => true,
        '@PSR12' => true,
        '@PHP81Migration' => true,
        'single_quote' => true,
    ]
)->setFinder($finder);
