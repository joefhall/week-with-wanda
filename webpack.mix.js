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

let mix = require('laravel-mix');
require('laravel-mix-polyfill');

mix
  .react('resources/js/index.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .polyfill({
      enabled: true,
      useBuiltIns: "entry",
      targets: "> 0.1%"
   })
  .options({
    postCss: [
      require('postcss-css-variables')()
    ]
   })
  .version();
