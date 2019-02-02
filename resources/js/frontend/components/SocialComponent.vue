<template>
    <ul class="nav justify-content-center mt-5">
      <li v-for="(item,idx) in socialInfo" :key="idx" class="nav-item">
          <a class="nav-link" target="_blank" :href="item.link_url"><i :class="item.iclass"></i>{{ item.title }}</a>
      </li>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                socialInfo:[]
            }
        },
        mounted() {
            function getSocialData() {
                return axios.get('/getSocialData',{
                        params:{}
                    });
            }
            axios.all([getSocialData()])
                .then(axios.spread((res)=>{
                    this.socialInfo = res.data;
                }))
                .catch(function (error) {
                    console.log(error);
                });
            console.log('SocialComponent Component mounted.');
        }
    }
</script>