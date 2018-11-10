<template>
    <div class="container">
        <ul>
            <li v-for="(skill,idx) in skills" :key="idx" v-text="skill"></li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                skills:[],
            };
        },
        mounted() {
            function getListDataByGet() {
                // Make an ajax request to our server - /listData
                return axios.get('/listDataGet',{
                        params:{new_list:"mylearn_Get"}
                    });
            }
            function getListDataByPost() {
                // Make an ajax request to our server - /listData
                // this.$http.post('/listData',{new_list:"mylearn"})
                return axios.post('/listDataPost',{
                        params:{new_list:"mylearn_Post"}
                    });
            }
            axios.all([getListDataByGet(), getListDataByPost()])
                .then(axios.spread((resGet, resPost)=>{
                    // 兩個請求現在都執行完成
                    console.log(resGet, resPost);
                    this.skills = resGet.data;
                    // this.skills = resPost.data;
                }))
                .catch(function (error) {
                    console.log(error);
                });
            console.log('AxiosTestComponent Component mounted.');
        }
    }
</script>
