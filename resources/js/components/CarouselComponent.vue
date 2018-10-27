<template>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item bg bg1 active">
                <!-- <img class="d-block w-100" src="images/slide01.jpg" alt="First slide"> -->
                <div class="carousel-caption d-none d-md-block">
                    <p>A free responsive web site template by <a href="https://templated.co">TEMPLATED</a></p>
                    <hr class="my-4">
                    <h2>Hielo</h2>
                </div>
            </div>
            <div class="carousel-item bg bg2">
                <!-- <img class="d-block w-100" src="images/slide02.jpg" alt="Second slide"> -->
                <div class="carousel-caption d-none d-md-block">
                    <p>Lorem ipsum dolor sit amet nullam feugiat</p>
                    <hr class="my-4">
                    <h2>Magna etiam</h2>
                </div>
            </div>
            <div class="carousel-item bg bg3">
                <!-- <img class="d-block w-100" src="images/slide03.jpg" alt="Third slide"> -->
                <div class="carousel-caption d-none d-md-block">
                    <p>Sed cursus aliuam veroeros lorem ipsum nullam</p>
                    <hr class="my-4">
                    <h2>Tempus dolor</h2>
                </div>
            </div>
            <div class="carousel-item bg bg4">
                <!-- <img class="d-block w-100" src="images/slide04.jpg" alt="Fourth slide"> -->
                <div class="carousel-caption d-none d-md-block">
                    <p>Adipiscing lorem ipsum feugiat sed phasellus consequat</p>
                    <hr class="my-4">
                    <h2>Etiam feugiat</h2>
                </div>
            </div>
            <div class="carousel-item bg bg5">
                <!-- <img class="d-block w-100" src="images/slide05.jpg" alt="Fifth slide"> -->
                <div class="carousel-caption d-none d-md-block">
                    <p>Ipsum dolor sed magna veroeros lorem ipsum</p>
                    <hr class="my-4">
                    <h2>Lorem adipiscing</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>