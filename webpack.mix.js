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

<<<<<<< HEAD
mix.js('resources/assets/js/app.js', 'public/js') 
.sass('resources/assets/sass/new.scss', 'public/css');
=======
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');
>>>>>>> parent of 00e8776... SCSS FIXED


mix.sass('resources/assets/sass/style.scss', 'public/css');

// mix.styles([
//    'public/css/styles.css',
//    'public/css/app.css'
// ], 'public/css/custom.css');