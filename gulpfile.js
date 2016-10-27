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

elixir(function(mix) {
    mix.sass(['app.scss'],'public/assets/css/app.min.css')
        .copy(
            "./node_modules/font-awesome/fonts",
            "./public/assets/fonts/"
        )
        .copy
        (
            "./vendor/twitter/bootstrap/dist/js/bootstrap.js",
            "./resources/assets/js/bootstrap.js"
        )

    mix.scripts([
        'jquery-1.12.4.js',
        'bootstrap.js',
    ],'public/assets/js/app.min.js','resources/assets/js')
        .version(['public/assets/js/app.min.js','public/assets/css/app.min.css']);

});
