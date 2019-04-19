<?php namespace Kolpikov\LaravelSlug;

use Illuminate\Support\Facades\Facade;

/**
 * Class SlugFacade
 * @package Kolpikov\LaravelSlug
 */
class SlugFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'slug';
    }
}
