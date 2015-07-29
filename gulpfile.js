var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy('node_modules/bootstrap-sass/assets/fonts/', 'public/fonts');
    mix.sass('app.scss');
    mix.phpUnit();
});

/*
var paths = {
 'jquery': './vendor/bower_components/jquery/',
 'bootstrap': './node_modules/bootstrap-sass/assets/',

}

elixir(function(mix) {
 mix.sass('app.scss','public/css/',{includePaths: [paths.bootstrap + 'stylesheets/']})
     .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts/bootstrap')
     .scripts([

      paths.jquery + "dist/jquery.js",
      paths.bootstrap + "javascripts/bootstrap.js",



     ], 'public/js/app.js', './');

});
*/