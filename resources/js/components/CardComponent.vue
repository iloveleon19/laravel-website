<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6" v-for="(card,idx) in cards" :key="idx">
                <div class="card text-center">
                    <img class="card-img-top" :src="card.img" :alt="card.alt">
                    <div class="card-header">
                       {{ card.header }}
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{ card.title }}</h2>
                        <p class="card-text">
                            {{ card.text }}
                        </p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
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
                    {header:'maecenas sapien feugiat ex purus',title:'Lorem ipsum dolor',text:'Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.',img:'/images/pic02.jpg',alt:'Card image cap'},
                    {header:'mattis elementum sapien pretium tellus',title:'Vestibulum sit amet',text:'Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada.',img:'/images/pic03.jpg',alt:'Card image cap'}
                ]
            }
        },
        mounted() {
            console.log('CardComponent Component mounted.')
        }
    }
</script>