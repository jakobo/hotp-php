<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude("tests")
    ->exclude("vendor")
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config->setRules([
    '@PSR12' => true,
    'trailing_comma_in_multiline' => true,
])->setUsingCache(false)
    ->setFinder($finder);
