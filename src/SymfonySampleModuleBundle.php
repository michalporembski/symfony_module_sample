<?php

namespace MPorembski\SampleModule;

use MPorembski\SampleModule\DependencyInjection\SampleModuleExtension;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class SymfonySampleModuleBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return __DIR__;
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new SampleModuleExtension();
    }
}
