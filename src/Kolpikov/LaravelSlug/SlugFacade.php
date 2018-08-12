<?php namespace Kolpikov\LaravelSlug;

use Illuminate\Support\Facades\Facade;

class SlugFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'slug';
    }
}
