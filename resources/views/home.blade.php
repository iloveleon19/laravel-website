<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <style>
    .article{
      position: relative;
      background-image: url(images/slide04.jpg);
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      z-index: 1;
      color: #fff;
    }
    html, body {
      height:100%;
      margin:0;
      padding:0;
    }
    .carousel, .carousel-item, .active {
      height:100%;
    }
    .carousel-inner {
      height:100%;
    }
    .carousel {
      margin-bottom: 60px;
    }
    .carousel-caption {
      z-index: 10;
    }
    .carousel .carousel-item {
      background-color: #777;
    }
    .carousel .carousel-inner .bg {
      background-repeat:no-repeat;
      background-size:cover;
    }
    .carousel .carousel-inner .bg1 {
      background-image:url('images/slide01.jpg');
      background-position: center top;
    }
    .carousel .carousel-inner .bg2 {
      background-image:url('images/slide02.jpg');
      background-position: center center;
    }
    .carousel .carousel-inner .bg3 {
      background-image:url('images/slide03.jpg');
      background-position: center bottom;
    }
    .carousel .carousel-inner .bg4 {
      background-image:url('images/slide04.jpg');
      background-position: center bottom;
    }
    .carousel .carousel-inner .bg5 {
      background-image:url('images/slide05.jpg');
      background-position: center bottom;
    }
  </style>
  <title>Document</title>
</head>
<body>
<div id="app">
  <header-component></header-component>
  <carousel-component></carousel-component>
  <card-component></card-component>
  <jumbotron-component></jumbotron-component>
  <container-component></container-component>
  <social-component></social-component>
  <foot-component></foot-component>
</div>
<!-- </div> -->

<!--Javascript-->
<script src="/js/app.js"></script>
</body>
</html>