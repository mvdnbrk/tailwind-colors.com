const mix = require('laravel-mix');

require('mix-tailwindcss');
require('laravel-mix-purgecss');

mix
    .postCss('resources/css/main.css', 'public/css')
    .tailwind()
    .purgeCss({
        extend: {
            content: [path.join(__dirname, 'src/app/view/components/*.php')],
        },
    })
    .version();
