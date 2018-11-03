<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/article.css">
  <link rel="stylesheet" href="/css/carousel.css">

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

<!--Javascript-->
<script src="/js/app.js"></script>
</body>
</html>