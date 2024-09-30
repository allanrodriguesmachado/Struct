let mix = require('laravel-mix');

mix.css('resource/css/app.css', 'public/css', [
    require('tailwindcss')
])