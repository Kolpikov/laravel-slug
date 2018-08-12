<?php namespace Kolpikov\LaravelSlug;

use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('slug', function() {
            return new Slug;
        });
    }
}
