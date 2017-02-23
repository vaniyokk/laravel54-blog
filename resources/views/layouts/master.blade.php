<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  @include('partials.nav')
  <div class="hero">
    <section class="section">
      <div class="columns">
        <div class="column is-three-quarters">
          @yield('content')
        </div>
        <div class="column is-one-quarters">
          @include('partials.sidebar')
        </div>
      </div>
    </section>
  </div>
  

  @include('partials.footer')
</body>
</html>
