<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

    @include('partials.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">{{ config('app.name') }} Blog</h1>
        <p class="lead blog-description">Блог о недвижимости в Таиланде.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">

        @yield('content')

        @include('partials.sidebar')

      </div>
    </div>

    @include('partials.footer')

  </body>
</html>
