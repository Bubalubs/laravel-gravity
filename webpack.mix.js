let mix = require('laravel-mix');

mix.js('src/resources/js/gravity.js', 'src/resources/dist/').vue()
    .sass('src/resources/sass/gravity.scss', 'src/resources/dist/');