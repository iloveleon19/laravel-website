<template>
    <ul class="nav justify-content-center mt-5">
      <li v-for="(item,idx) in socialInfo" :key="idx" class="nav-item">
          <a class="nav-link" href="#"><i :class="item.iclass"></i>{{ item.title }}</a>
      </li>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                socialInfo:[
                    {title:'Twitter',iclass:'fab fa-twitter-square'},
                    {title:'Facebook',iclass:'fab fa-facebook-square'},
                    {title:'Instagram',iclass:'fab fa-instagram'},
                    {title:'Email',iclass:'fas fa-envelope-square'}
                ]
            }
        },
        mounted() {
            console.log('SocialComponent Component mounted.')
        }
    }
</script>