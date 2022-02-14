<?php

declare(strict_types=1);

namespace Inisiatif\ModelShared\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Inisiatif\ModelShared\Providers\ModelSharedServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            ModelSharedServiceProvider::class,
        ];
    }
}
