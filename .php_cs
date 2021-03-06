<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in([
        __DIR__ . '/web/modules/custom',
        __DIR__ . '/web/sites',
        __DIR__ . '/web/themes/custom',
        __DIR__ . '/tests',
    ])
    ->name('*.php')
    ->name('*.module')
    ->name('*.theme');

return Config::create()
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'header_comment' => ['header' => "\n"],
        'native_function_invocation' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'yoda_style' => false,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
