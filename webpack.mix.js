// @ts-nocheck
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
        require("tailwindcss"),
    ]);

mix.copy('node_modules/xterm/lib/xterm.js', 'public/js');
mix.copy('node_modules/xterm/css/xterm.css', 'public/css');