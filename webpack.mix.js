let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/react/react-20180905.js', 'public/js/react')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/branch_io.scss', 'public/css')
   .sass('resources/assets/sass/branch_io_1.scss', 'public/css');