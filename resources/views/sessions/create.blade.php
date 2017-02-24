@extends('layouts.auth')

@section('content')
  <section class="hero is-fullheight is-dark is-bold">
    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-4 is-offset-4">
            <h1 class="title">
              Register an Account
            </h1>
            <div class="box">
              <form method="POST" aciton="{{ route('register') }}">
                {{ csrf_field() }}

                <label class="label">Username</label>
                <p class="control">
                  <input name="name" class="input" type="text" placeholder="jsmith" value="{{ old('name') }}" required>
                </p>
                <label class="label">Email</label>
                <p class="control">
                  <input name="email" class="input" type="text" placeholder="jsmith@example.org" {{ old('email') }} required>
                </p>
                <hr>
                <label class="label">Password</label>
                <p class="control">
                  <input name="password" class="input" type="password" placeholder="●●●●●●●" required>
                </p>
                <label class="label">Confirm Password</label>
                <p class="control">
                  <input name="password_confirmation" class="input" type="password" placeholder="●●●●●●●" required>
                </p>
                <hr>
                @include('partials.errors')
                <p class="control">
                  <button type="submit" class="button is-primary">Register</button>
                  <a href="/" class="button is-dark is-inverted">Cancel</a>
                </p>
              </form>
            </div>
            <p class="has-text-centered">
              <a href="{{ route('login') }}">Login</a>
            </p>


          </div>


        </div>
      </div>
    </div>

  </section>
@stop