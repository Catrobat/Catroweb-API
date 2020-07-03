<?php

namespace OpenAPI\Server\Tests;

use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class AppKernel extends Kernel
{
  public function registerBundles()
  {
    return [
      new FrameworkBundle(),
    ];
  }

  public function registerContainerConfiguration(LoaderInterface $loader)
  {
    $loader->load(__DIR__.'/test_config.yml');
  }
}
