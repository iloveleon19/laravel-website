<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ mix('/css/article.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ mix('/css/carousel.css') }}" type="text/css">

  <title>My Web Site</title>
</head>
<body>

  <div id="app">
    <header-component></header-component>

    <router-view class="main" name="carousel"></router-view>
    <router-view class="main" name="card"></router-view>
    <router-view class="main" name="jumbotron"></router-view>
    <router-view class="main" name="container"></router-view>
    <router-view class="main" name="social"></router-view>

    <footer-component></footer-component>
  </div>

  <!--Javascript-->
  <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>