let mix = require('laravel-mix');

mix.setPublicPath('public')
mix.version()

mix.css('resources/css/app.css', 'public/css')