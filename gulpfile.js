var gulp = require("gulp");
var elixir = require('laravel-elixir');

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

elixir.config.cssOutput = 'public/themes';

elixir(function (mix) {

    mix.browserSync({
        proxy: "societycms.dev",
        port:   8080
    });

});
