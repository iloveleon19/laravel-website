const mix = require('laravel-mix');

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

// if (mix.inProduction()) {
//   mix.version();
// }

// mix.webpackConfig({
//     output: {
//       publicPath: 'public/back', // 設置默認打包目錄
//     //   chunkFilename: `js/[name].${mix.inProduction() ? '[chunkhash].' : ''}js` // 路由在加載的時候打包出來的js文件
//     }
// });

mix.react('resources/js/backend/app.js', 'js')
   .sass('resources/sass/app.scss', 'css')
   .sass('resources/sass/backend/signin.scss', 'css')
   .setPublicPath('public/back');

mix.version();