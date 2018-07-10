var elixir = require('laravel-elixir');

// npm install --save-dev browser-sync

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir(function (mix) {

    mix.sass('app.scss', 'resources/css');

    // mix.styles(['vendor/normalize.css', 'app.css'], null, 'public/css');

    mix.styles([
        'libs/bootstrap.min.css',
        'app/css',
        'libs/select2.min.css',
    ]);

    mix.version('public/css/all.css');
});
