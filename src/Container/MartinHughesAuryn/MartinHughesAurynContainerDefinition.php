<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\MartinHughesAuryn;

use DiContainerBenchmarks\Container\ContainerAdapterInterface;
use DiContainerBenchmarks\Container\ContainerDefinitionInterface;

final class MartinHughesAurynContainerDefinition implements ContainerDefinitionInterface
{
    public function getPackage(): string
    {
        return 'martin-hughes/auryn';
    }

    public function getName(): string
    {
        return 'martin-hughes/auryn';
    }

    public function getDisplayedName(): string
    {
        return 'martin-hughes/auryn';
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return 'https://github.com/martin-hughes/auryn';
    }

    public function getAdapter(): ContainerAdapterInterface
    {
        return new MartinHughesAurynContainerAdapter();
    }
}
