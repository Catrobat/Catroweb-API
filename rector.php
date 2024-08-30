<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return RectorConfig::configure()
  ->withPaths([
    __DIR__.'/Model',
  ])
  ->withSets([
    Rector\Doctrine\Set\DoctrineSetList::ANNOTATIONS_TO_ATTRIBUTES,
    Rector\Symfony\Set\SymfonySetList::ANNOTATIONS_TO_ATTRIBUTES,
    Rector\Symfony\Set\SensiolabsSetList::ANNOTATIONS_TO_ATTRIBUTES,
    Rector\Symfony\Set\JMSSetList::ANNOTATIONS_TO_ATTRIBUTES,
  ])
;
