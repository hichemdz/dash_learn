const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/front/app.js', 'public/js/front')
    .js('resources/js/back/app.js', 'public/js/back')
    .sass('resources/sass/back/app.scss', 'public/css/back');
    // .postCss('resources/css/app.css', 'public/css', [
    //     //
    // ]);
