<?php

namespace MkEcodr\AnalyticsV4\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MkEcodr\AnalyticsV4\AnalyticsV4
 */
class AnalyticsV4 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MkEcodr\AnalyticsV4\AnalyticsV4::class;
    }
}
