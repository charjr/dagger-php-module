<?php

declare(strict_types=1);

namespace Dagger\Example;

use Dagger\Interface\DaggerFunction;
use Dagger\Interface\DaggerObject;

class InterfaceObject implements DaggerObject
{
    /** @var DaggerFunction[] */
    private array $daggerFunctions = [];

    public function __construct() {}

    public function name(): string
    {
        return 'example-with-interface';
    }

    public function description(): string
    {
        return "Example Dagger Object using Interfaces";
    }

    public function functions(): array
    {
        return $this->daggerFunctions;
    }

}
