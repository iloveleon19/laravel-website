<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ mix('/css/app.css', 'back') }}" type="text/css">
  <link rel="stylesheet" href="{{ mix('/css/signin.css', 'back') }}" type="text/css">
  <link rel="stylesheet" href="{{ mix('/css/dashboard.css', 'back') }}" type="text/css">

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  <title>index</title>
</head>
<body>

  <div id="index"></div>
  
  <!--Javascript-->
  <script src="{{ mix('/js/app.js', 'back') }}"></script>
</body>
</html>
