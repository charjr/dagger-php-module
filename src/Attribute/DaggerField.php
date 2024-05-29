<?php

declare(strict_types=1);

namespace Dagger\Attribute;

#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_PARAMETER)]
final class DaggerField
{
    public function __construct(
        public ?string $name = null,
        public ?string $documentation = null,
    ) {
    }
}
