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

  mix.copy('node_modules/axios/dist/axios.js', 'resources/assets/js/modules/axios.js');
  mix.copy('node_modules/type-ahead/type-ahead.js', 'resources/assets/js/modules/type-ahead.js');

  mix.sass(['normalize.scss',
            'layout.scss',
            'common.scss',
            'styles.scss',
            'main-icon.scss',
            'pages.scss',
            'wallop.scss',
            'mediaqueries/mediaqueries.scss'],

            'public/css/site.css');

  mix.sass(['normalize.scss',
      'layout.scss',
      'common.scss',
      'admin.scss'],

    'public/css/admin.css')

  mix.webpack(['modules/Lazyload.js',
             'modules/Navigation.js',
             'modules/Wallop.js',
    'modules/axios.js',
      'modules/type-ahead.js',
              'app.js'], "public/js/app.js")

  mix.version(['public/css/site.css', 'public/css/admin.css', "public/js/app.js"], 'public/')

});