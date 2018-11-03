<template>
    <div>
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
</template>

<script>
    export default {
        data() {
            return {
                jumbotron: {title:'Morbi maximus justo',text:'Nam vel ante sit amet libero scelerisque facilisis eleifend vitae urna'}
            }
        },
        mounted() {
            console.log('JumbotronComponent Component mounted.')
        }
    }
</script>