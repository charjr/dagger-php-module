<?php

declare(strict_types=1);

namespace Dagger\Interface;

/**
 * https://dagger-io.readthedocs.io/en/sdk-python-v0.11.4/client.html#dagger.ObjectTypeDef
 */
interface DaggerObject
{
    public function name(): string;

    public function description(): string;

    /** @return DaggerFunction[] */
    public function functions(): array;
}
