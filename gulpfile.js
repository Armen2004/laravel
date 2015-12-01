var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');

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

elixir(function(mix) {
    mix.styles([
        './resources/assets/bower/bootstrap/dist/css/bootstrap.css',
        './resources/assets/bower/bootstrap/dist/css/bootstrap-theme.css',
        './public/css/custom/style.css'
    ])
    .scripts([
        './resources/assets/bower/jquery/dist/jquery.js',
        './resources/assets/bower/bootstrap/dist/js/bootstrap.js',
        './public/js/custom/functionality.js'
    ])
    .imagemin(
        "./resources/assets/images",
        "./public/img/"
    )
    .copy(
        './resources/assets/bower/bootstrap/dist/fonts',
        './public/fonts'
    )
});