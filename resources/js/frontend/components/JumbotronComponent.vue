<template>
    <div>
        <div v-for="(jumbotron,idx) in jumbotrons" :key="idx">
            <div class="article jumbotron mt-5 text-center">
                <p class="lead">{{ jumbotron.text }}</p>
                <hr class="my-4">
                <h2>{{ jumbotron.title }}</h2>
            </div>

            <div class="jumbotron mt-5 text-center">
                <p class="lead"> {{ jumbotron.text }} </p>
                <hr class="my-4">
                <h2>{{ jumbotron.title }}</h2>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                jumbotrons: []
            }
        },
        mounted() {
            function getjumbotronData() {
                return axios.get('/getJumbotronData',{
                        params:{}
                    });
            }
            axios.all([getjumbotronData()])
                .then(axios.spread((res)=>{
                    this.jumbotrons = res.data;
                }))
                .catch(function (error) {
                    console.log(error);
                });
            console.log('JumbotronComponent Component mounted.');
        }
    }
</script>