<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Weibo App') - Laravel 入门教程L01</title>
    <link href="image/favicon.ico" rel="icon" type="image/x-ico">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    @include('layouts._header')
    <div class="container">
     @include('shared._messages')
     @yield('content')
     @include('layouts._footer')
    </div>
     <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>