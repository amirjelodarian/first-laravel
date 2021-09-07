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
mix
    .combine([
        'resources/css/animate.css',
        'resources/css/bootstrap.min.css',
        'resources/css/font-awesome.min.css',
        'resources/css/main.css',
        'resources/css/normalize.css',
        'resources/css/responsive.css',
        'resources/css/style.css',
        'resources/css/app.css',
        'resources/css/dropzone.css'
    ],'public/css/all.css')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .js(['resources/js/dropzone.js','resources/js/app.js'], 'public/js')
;
    // .vue()


