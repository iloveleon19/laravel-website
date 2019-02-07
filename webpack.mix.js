const mix = require('laravel-mix');
const { env } = require('minimist')(process.argv.slice(2));

// 判斷如果是 backend 那就執行 webpack.backend.js 構建後台項目，構建之後 return 就不會往下執行了
if (env && env.backend) {
   require(`${__dirname}/webpack.backend.js`);
   return;
 }

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

 //  // 前台項目的構建規則
// if (mix.inProduction()) {
//    mix.version();
//  }
 
//  mix.webpackConfig({
//    output: {
//      publicPath: 'public/front', // 設置默認打包目錄
//      chunkFilename: `js/[name].${mix.inProduction() ? '[chunkhash].' : ''}js` // 路由在加載的時候打包出來的js文件
//    }
//  });

mix.js('resources/js/frontend/app.js', 'js')
   .sass('resources/sass/app.scss', 'css')
   .sass('resources/sass/frontend/article.scss', 'css')
   .sass('resources/sass/frontend/carousel.scss', 'css')

mix.version();