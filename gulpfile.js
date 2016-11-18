const elixir = require('laravel-elixir');


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

elixir(mix => {
    mix.sass(['normalize.scss',
              'layout.scss',
              'common.scss',
              'styles.scss',
              'main-icon.scss',
              'royalslider-atyca.scss',
              'pages.scss',
              'mediaqueries.scss'],

              'public/css/site.css');

  mix.sass(['normalize.scss',
        'layout.scss',
        'common.scss',
        'admin.scss'],

      'public/css/admin.css');

    //mix.webpack(['app.js'], 'public/js/app.js');
    mix.rollup(['modules/Lazyload.js', 'modules/Navigation.js'], "app.js");

});