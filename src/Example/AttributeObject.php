<?php

declare(strict_types=1);

namespace Dagger\Example;

use Dagger\Attribute\DaggerField;
use Dagger\Attribute\DaggerFunction;
use Dagger\Attribute\DaggerObject;

#[DaggerObject]
final class AttributeObject
{
    #[DaggerFunction('build-and-publish', 'Build and publish a project using a Wolfi container')]
    public function buildAndPublish(
        #[DaggerField('src', 'The directory to build a container from')]
        string $buildFrom,
        #[DaggerField]
        array $buildArgs = []
    ) {}

}
