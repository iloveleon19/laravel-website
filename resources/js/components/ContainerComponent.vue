<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-sm-5 mt-2 ml-2" v-for="(card,idx) in cards" :key="idx">
                <div class="card-body">
                    <a href="#"><img class="card-img" :src="card.img" :alt="card.alt"></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                cards:[
                    {img:'/images/pic01.jpg',alt:'Card image'},
                    {img:'/images/pic02.jpg',alt:'Card image'},
                    {img:'/images/pic03.jpg',alt:'Card image'},
                    {img:'/images/pic04.jpg',alt:'Card image'},
                ]
            }
        },
        mounted() {
            console.log('ContainerComponent Component mounted.')
        }
    }
</script>