const mix = require('laravel-mix');

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

/*website  CSS */

mix.styles([
    "public/assets/website/css/bootstrap.min.css",
    "public/assets/website/css/fontawesome5-all.css",
    "public/assets/website/css/select2.min.css",
    "public/assets/website/css/aos.css",
    "public/assets/website/css/swiper.css",

], "public/assets/website/css/bundle-style.css");



/* JS */

/* dashboard JS */

/* website JS */

mix.scripts([
    "public/assets/website/js/jquery-3.3.1.min.js",
    "public/assets/website/js/bootstrap.bundle.min.js",
    "public/assets/website/js/select2.min.js",
    "public/assets/website/js/swiper.js",
    "public/assets/website/js/aos.js",
    "public/assets/website/js/custom.js",

], "public/assets/website/js/bundle-script.js");


