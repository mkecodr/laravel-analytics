<?php

namespace MkEcodr\AnalyticsV4\Tests;

use MkEcodr\AnalyticsV4\AnalyticsV4ServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            AnalyticsV4ServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
    }
}
