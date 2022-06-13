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


 mix.scripts([
    'public/js/jquery.js',
    'public/js/toastr.min.js',
    'public/js/sweetalert2@10.js',
    'public/js/app.js',
    'public/js/user.js',
], 'public/js/all.js');

mix.styles([
    'public/css/app.css',
    'public/css/font-awesome.min.css',
    'public/css/toastr.min.css',
], 'public/css/all.css');

