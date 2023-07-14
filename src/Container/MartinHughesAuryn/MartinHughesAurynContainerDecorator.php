<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\MartinHughesAuryn;

use Auryn\Injector;
use Psr\Container\ContainerInterface;

final class MartinHughesAurynContainerDecorator extends Injector implements ContainerInterface
{
    public function has($id): bool
    {
        return true;
    }

    public function get(string $id)
    {
        return $this->make($id);
    }
}
