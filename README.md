# Laravel 5 Cyrillic Slug

This library was forked from [ivanlemeshev/laravel5-cyrillic-slug](https://github.com/ivanlemeshev/laravel5-cyrillic-slug)

## Supported Alphabets
    * Russian
    * Kazakh
    * Ukrainian

## Installation

You should install this package through Composer.

Edit your project's `composer.json` file to require `Kolpikov/laravel5-cyrillic-slug`.

    "require": {
        "Kolpikov/laravel5-cyrillic-slug": "1.0.0"
    },

Next, update Composer from the Terminal:
    `composer update`

Once this operation completes, the final step is to add the service provider.
Open `app/config/app.php`, and add a new item to the providers array.

  `'Kolpikov\LaravelSlug\SlugServiceProvider',`

And add a new item to the aliases array.

  `'Slug' => 'Kolpikov\LaravelSlug\SlugFacade',`

Usage
-------
Call of the method: `Slug::make($text)`

Call of the method with specific separator: `Slug::make($text, '_')`.

## License

This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).
