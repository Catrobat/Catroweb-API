<?php

$finder = PhpCsFixer\Finder::create()
  ->exclude(['vendor'])
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
  ])
  ->setFinder($finder)
  ->setUsingCache(false)
  ->setIndent('  ');