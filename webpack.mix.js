const mix = require('laravel-mix');

const NodePolyfillPlugin = require("node-polyfill-webpack-plugin")
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
mix.webpackConfig({
    plugins: [
        new NodePolyfillPlugin()
    ]
});

mix.setPublicPath('public/');

mix.sass('resources/scss/app.scss', 'css/');
mix.js('resources/js/app.js', 'js/');

if (mix.inProduction()) {
    mix.version();
}
