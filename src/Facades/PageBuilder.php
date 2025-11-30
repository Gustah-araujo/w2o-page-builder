<?php

namespace TimeW2o\PageBuilder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TimeW2o\PageBuilder\PageBuilder
 */
class PageBuilder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \TimeW2o\PageBuilder\PageBuilder::class;
    }
}
