var elixir = require('laravel-elixir');

require('laravel-elixir-bower');
require('laravel-elixir-rename');

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
  mix.bower()
    .sass('app.scss')
    .scriptsIn('resources/assets/js', 'public/js/app.js')
    .version(['css/app.css', 'js/app.js']);
});