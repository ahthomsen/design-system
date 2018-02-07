let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.sass('resources/assets/sass/app.scss', 'public/css');

var tailwindcss = require('tailwindcss');


mix.sass('resources/assets/sass/app.scss', 'public/css', {

	 includePaths: ['node_modules']
   })
  .options({
    processCssUrls: false,
    postCss: [ tailwindcss('./resources/assets/tailwind.js') ],
  });

mix.version();