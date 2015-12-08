var gulp = require("gulp");
var elixir = require('laravel-elixir');
var shell = require("gulp-shell");

var Task = elixir.Task;

elixir.extend("stylistPublish", function() {

    new Task("stylistPublish", function() {
        gulp.src('').pipe(shell('php artisan stylist:publish'));
    })

        .watch('themes/**/*.less')
        .watch('themes/**/*.js');
});


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

    mix.stylistPublish();

    mix.browserSync({
        proxy: "societycms.dev",
        port:   8080
    });

});
