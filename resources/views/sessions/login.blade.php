@extends('layouts.bulma')

@section('content')
<section class="hero is-fullheight is-dark is-bold">
  <div class="hero-body">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column is-4 is-offset-4">
          <h1 class="title">
            Login
          </h1>
          <div class="box">
            <form action="{{ route('login') }}" method="POST">
              {{ csrf_field() }}
              <label class="label">Email</label>
              <p class="control">
                <input name="email" class="input" type="text" placeholder="jsmith@example.org" value="{{ old('email') }}" required>
              </p>
              <label class="label">Password</label>
              <p class="control">
                <input name="password" class="input" type="password" placeholder="●●●●●●●" required>
              </p>
              <hr>
              @include('partials.errors')
              <p class="control">
                <button type="submit" class="button is-primary">Login</button>
                <a href="/" class="button is-dark is-inverted">Cancel</a>
              </p>
            </div>
            
           

            <p class="has-text-centered">
              <a href="{{ route('register') }}">Register an Account</a>
              {{-- |  --}}
              {{-- <a href="{{ route('reset') }}">Forgot password</a> --}}
            </p>
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
@stop