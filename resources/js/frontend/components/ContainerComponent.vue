<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-sm-5 mt-2 ml-2" v-for="(card,idx) in cards" :key="idx">
                <div class="card-body">
                    <a href="#"><img class="card-img" :src="card.img_path" :alt="card.alt"></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                cards:[]
            }
        },
        mounted() {
            function getPicImage() {
                return axios.get('/getPicImage',{
                        params:{}
                    });
            }
            axios.all([getPicImage()])
                .then(axios.spread((res)=>{
                    this.cards = res.data;
                }))
                .catch(function (error) {
                    console.log(error);
                });
            console.log('ContainerComponent Component mounted.');
        }
    }
</script>