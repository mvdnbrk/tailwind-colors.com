const mix = require('laravel-mix');

require('mix-tailwindcss');

mix
    .postCss('resources/css/main.css', 'public/css')
    .tailwind()
    .version();
