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
    mix.sass(['app.scss']);
    //mix.babel('scripts.js');
    mix.scripts(['../../../app/bower_components/Leaflet.awesome-markers/dist/leaflet.awesome-markers.js','../../../app/bower_components/angular-simple-logger/dist/angular-simple-logger.js','../../../app/bower_components/angular-leaflet-directive/dist/angular-leaflet-directive.js','../../../app/bower_components/angucomplete-alt/angucomplete-alt.js','app.js'], 'public/js/scripts.js');
    //mix.phpUnit();
    mix.version(['/css/app.css']);
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