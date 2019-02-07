<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6" v-for="(card,idx) in cards" :key="idx">
                <div class="card text-center">
                    <img class="card-img-top" :src="card.img_path" :alt="card.alt_cap">
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
                cards:[]
            }
        },
        mounted() {
            function getCardData() {
                return axios.get('/getCardData',{
                        params:{}
                    });
            }
            axios.all([getCardData()])
                .then(axios.spread((resCard)=>{
                    this.cards = resCard.data;
                }))
                .catch(error => {
                    console.log(error);
                });
            console.log('CardComponent Component mounted.');
        }
    }
</script>