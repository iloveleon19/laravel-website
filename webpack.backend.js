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
//       publicPath: '/js/back/', // 设置默认打包目录
//     //   chunkFilename: `js/[name].${mix.inProduction() ? '[chunkhash].' : ''}js` // 路由在加载的时候打包出来的js文件
//       chunkFilename: `js/[name].${'[chunkhash].'}js` // 路由在加载的时候打包出来的js文件
//     }
// });

mix.react('resources/js/backend/app.js', 'public/js/back');

mix.version();