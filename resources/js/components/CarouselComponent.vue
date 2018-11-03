<template>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" v-for="(banner,idx) in banners" :key="idx" :data-slide-to="idx" :class="{ active: idx==0 }"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item" v-for="(banner,idx) in banners" :key="idx" :class="{ active: idx==0}">
        <img class="d-block w-100" :src="banner.img_path" :alt="banner.alt">
            <div class="carousel-caption d-none d-md-block">
                <p v-html="banner.text"></p>
                <hr class="my-4">
                <h2> {{ banner.title }} </h2>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                banners:[
                    {img_path:"/images/slide01.jpg",alt:"First slide",title:"Hielo",text:'A free responsive web site template by <a href="https://templated.co">TEMPLATED</a>'},
                    {img_path:"/images/slide02.jpg",alt:"Second slide",title:"Magna etiam",text:"Lorem ipsum dolor sit amet nullam feugiat"},
                    {img_path:"/images/slide03.jpg",alt:"Third slide",title:"Tempus dolor",text:"Sed cursus aliuam veroeros lorem ipsum nullam"},
                    {img_path:"/images/slide04.jpg",alt:"Fourth slide",title:"Etiam feugiat",text:"Adipiscing lorem ipsum feugiat sed phasellus consequat"},
                    {img_path:"/images/slide05.jpg",alt:"Fifth slide",title:"Lorem adipiscing",text:"Ipsum dolor sed magna veroeros lorem ipsum"},
                ]
            }
        },
        mounted() {
            console.log('CarouselComponent Component mounted.')
        }
    }
</script>