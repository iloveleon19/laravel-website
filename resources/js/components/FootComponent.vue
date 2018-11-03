<template>
    <footer id="footer" class="mt-5">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-end">
            <a class="navbar-brand" href="#">&copy;{{ company.name }}</a>
        </nav>
    </footer>
</template>

<script>
    export default {
        data() {
            return {
                company:{name:'Untitled. All rights reserved.'}
            }
        },
        mounted() {
            console.log('FootComponent Component mounted.')
        }
    }
</script>