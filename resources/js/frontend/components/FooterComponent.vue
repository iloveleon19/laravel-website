<template>
    <footer id="footer" class="mt-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
            <a class="navbar-brand" v-for="(footer,idx) in footers" :key="idx" :href="footer.link_url">
                {{ footer.title }}© {{ footer.content }}
            </a>
        </nav>
    </footer>
</template>

<script>
    export default {
        data() {
            return {
                footers:[]
            }
        },
        mounted() {
            function getFooterData() {
                return axios.get('/getFooterData',{
                        params:{}
                    });
            }
            axios.all([getFooterData()])
                .then(axios.spread((res)=>{
                    this.footers = res.data;
                }))
                .catch(error => {
                    console.log(error);
                });
            console.log('FooterComponent Component mounted.');
        }
    }
</script>