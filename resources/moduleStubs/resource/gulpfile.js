var gulp = require("gulp");
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var moduleInfo = require('./module.json');

var Task = elixir.Task;

elixir.extend("PublishModules", function () {

    new Task("PublishModules", function () {
        gulp.src('').pipe(shell('php ../../artisan module:publish ' + moduleInfo.name));
    })

        .watch('**/*.less')
        .watch('**/*.js');
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

elixir(function (mix) {
    mix.less(moduleInfo.name + ".less");

    mix.copy('Resources/assets/images', 'Assets/images');

    mix.PublishModules();
});
