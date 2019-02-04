const mix = require('laravel-mix');
const { env } = require('minimist')(process.argv.slice(2));

// 判断如果是admin那就执行 webpack.admin.js 构建后台项目，构建之后return就不会往下执行了
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

 //  // 前台项目的构建规则
// if (mix.inProduction()) {
//    mix.version();
//  }
 
//  mix.webpackConfig({
//    output: {
//      publicPath: '/frontend/', // 设置默认打包目录
//      chunkFilename: `js/[name].${mix.inProduction() ? '[chunkhash].' : ''}js` // 路由懒加载的时候打包出来的js文件
//    }
//  });

mix.js('resources/js/frontend/app.js', 'public/js/front')
   .sass('resources/sass/app.scss', 'public/css/front')
   .sass('resources/sass/frontend/article.scss', 'public/css/front')
   .sass('resources/sass/frontend/carousel.scss', 'public/css/front');

mix.version();