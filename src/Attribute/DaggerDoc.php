<?php

declare(strict_types=1);

namespace Dagger\Attribute;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::TARGET_PARAMETER)]
final class DaggerDoc
{
    public function __construct(
        public string $text,
    ) {}

}
