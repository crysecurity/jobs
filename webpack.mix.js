const mix = require('laravel-mix');

require('vuetifyjs-mix-extension');
require('laravel-mix-eslint-config');

//if you use vuetify-loader
mix
    .js('resources/js/app.js', 'public/js')
    .eslint()
    .vuetify();
