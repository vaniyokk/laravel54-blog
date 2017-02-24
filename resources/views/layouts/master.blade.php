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
  <section class="hero is-primary">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column">
            <p class="title">
              Blog name
            </p>
            <p class="subtitle">
              Here is your future blog
            </p>
          </div>
          
        </div>
      </div>
    </div>

  </section>
  

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
  

  @include('partials.footer')
</body>
</html>
