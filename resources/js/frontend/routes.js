import VueRouter from 'vue-router'; //ES6 Module引入

let routes = [
    {
        path:'/', //路徑
        components: {
            carousel: require('./components/CarouselComponent.vue').default,
            card: require('./components/CardComponent.vue').default,
            jumbotron: require('./components/JumbotronComponent.vue').default,
            container: require('./components/ContainerComponent.vue').default,
            social: require('./components/SocialComponent.vue').default
        }
    },
];

export default new VueRouter({
    model: history, //因為Vue router 會自動產生hashtag(#)，如果你覺得礙事可以加入這行。
    routes: routes //ES6語法，當key和value一樣時可省略key
})