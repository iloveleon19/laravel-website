
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import VueRouter from 'vue-router'; //ES6 Module引入
// import router from './routes'

window.Vue = require('vue');

// Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('axios-test-component', require('./components/AxiosTestComponent.vue'));

Vue.component('card-component', require('./components/CardComponent.vue'));
Vue.component('carousel-component', require('./components/CarouselComponent.vue'));
Vue.component('container-component', require('./components/ContainerComponent.vue'));
Vue.component('foot-component', require('./components/FootComponent.vue'));
Vue.component('header-component', require('./components/HeaderComponent.vue'));
Vue.component('jumbotron-component', require('./components/JumbotronComponent.vue'));
Vue.component('social-component', require('./components/SocialComponent.vue'));

const app = new Vue({
    el: '#app',
    // router: router
});
