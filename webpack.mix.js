const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css', { precision : 5 });

mix.js('resources/h5/js/app.js', 'public/h5/js');
mix.sass('resources/h5/sass/app.scss', 'public/h5/css', { precision : 5 });
mix.copyDirectory('resources/h5/images', 'public/h5/images');

if (mix.inProduction()) {
    mix.version();
    mix.disableNotifications();
}
