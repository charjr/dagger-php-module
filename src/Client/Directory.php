<?php

declare(strict_types=1);

namespace Dagger\Client;

final class Directory
{
    public function __construct(
        private string $path,
    ) {}

    public function asAModule(): DaggerModule
    {
        // do something...
    }

    public function difference(Directory $other): Directory
    {
        // do something.
    }

    public function dockerBuild(BuildOption ...$buildOptions): Container
    {
        // do something...
    }
}
