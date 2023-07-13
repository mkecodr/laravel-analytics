<?php

namespace MkEcodr\LaravelAnalyticsV4\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MkEcodr\LaravelAnalyticsV4\LaravelAnalyticsV4
 */
class LaravelAnalyticsV4 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MkEcodr\LaravelAnalyticsV4\LaravelAnalyticsV4::class;
    }
}
