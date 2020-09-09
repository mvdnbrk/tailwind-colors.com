const mix = require('laravel-mix');

require('mix-tailwindcss');
require('laravel-mix-purgecss');

mix
    .postCss('resources/css/main.css', 'public/css')
    .tailwind()
    .purgeCss()
    .version();
