<template>
    <footer id="footer" class="mt-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
            <a class="navbar-brand" href="#" v-for="(company,idx) in companys" :key="idx">&copy;{{ company.name }}</a>
        </nav>
    </footer>
</template>

<script>
    export default {
        data() {
            return {
                companys:[]
            }
        },
        mounted() {
            function getFootData() {
                return axios.get('/getFootData',{
                        params:{}
                    });
            }
            axios.all([getFootData()])
                .then(axios.spread((res)=>{
                    this.companys = res.data;
                }))
                .catch(function (error) {
                    console.log(error);
                });
            console.log('FootComponent Component mounted.');
        }
    }
</script>