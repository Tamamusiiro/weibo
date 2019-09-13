<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>@yield('title', 'weibo')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>

  <body>
    @include('layouts._header')
    <div class="container">
        <div class="offset-md-1 col-md-10">
          @include('layouts._errors')
          @include('layouts._message')
          @yield('content')
          @include('layouts._footer')
        </div>
      </div>
  </body>

  </html>
