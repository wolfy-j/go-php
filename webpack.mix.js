const mix = require('laravel-mix');
require('laravel-mix-purgecss');
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

mix.js('app/resources/js/app.js', 'public/js').extract()
    .sass('app/resources/sass/app.scss', 'public/css')
    .sass('app/resources/sass/vendor.scss', 'public/css')
    .copyDirectory('app/resources/img', 'public/img')
    .purgeCss();
