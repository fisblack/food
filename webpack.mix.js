let mix = require('laravel-mix');

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
mix.options({
    postCss: [
        require('autoprefixer')({
            browsers: ['last 2 versions'],
            cascade: false
        })
    ]
});

mix
    // Global Scripts
    .copyDirectory('resources/assets/vendors', 'public/vendors')
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    // .copyDirectory('resources/assets/fonts', 'public/fonts')
    .copyDirectory('resources/assets/images', 'public/images')

    // Auth
    .js('resources/assets/js/auth/login.js', 'public/js/auth')
    .js('resources/assets/js/auth/register.js', 'public/js/auth')
    .js('resources/assets/js/auth/forget-password.js', 'public/js/auth')
    .sass('resources/assets/sass/auth/login.scss', 'public/css/auth')
    .sass('resources/assets/sass/auth/register.scss', 'public/css/auth')
    .sass('resources/assets/sass/auth/forget-password.scss', 'public/css/auth')

    // BackOffice UI Kit

    .sass('resources/assets/sass/back-office/theme/app.scss', 'public/css/back-office/theme')
    .js('resources/assets/js/back-office/script.js', 'public/js/back-office')

    .sass('resources/assets/sass/back-office/settings/user.scss', 'public/css/back-office/settings')
    // .js('resources/assets/js/back-office/settings', 'public/js/back-office/settings')
;