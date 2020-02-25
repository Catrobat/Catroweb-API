<?php

$finder = PhpCsFixer\Finder::create()
  ->exclude(['vendor', 'Service'])
  ->in(__DIR__);

return PhpCsFixer\Config::create()
  ->setRules([
    '@PSR2'                 => true,
    '@PhpCsFixer'           => true,
    '@Symfony'              => true,
    '@DoctrineAnnotation'   => true,
    'strict_param'          => true,
    'braces'                => ['position_after_control_structures'   => 'next',
                                'position_after_anonymous_constructs' => 'next'],
    'phpdoc_to_return_type' => true,
    'phpdoc_to_param_type'  => true,
  ])
  ->setFinder($finder)
  ->setUsingCache(false)
  ->setIndent('  ');