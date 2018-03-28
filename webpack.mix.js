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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/libraries/canvasAreaDraw.js', 'public/js')
<<<<<<< HEAD
    .js('resources/assets/js/modifBoard.js', 'public/js')
=======
    .js('resources/assets/js/page_edit.js', 'public/js')
>>>>>>> 2d564449e4f3a4177c9ca291624c3040cf6bd7c2
   .sass('resources/assets/sass/app.scss', 'public/css')
   .browserSync('localhost:8000');
