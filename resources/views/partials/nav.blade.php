<nav class="nav has-shadow" id="top">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item" href="../index.html">
        <img src="http://bulma.io/images/bulma-logo.png" alt="Description">
      </a>
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu">
      <a class="nav-item is-tab 
        {{ Route::currentRouteNamed('home') ? 'is-active' : '' }}"
        href="{{ route('home') }}"
        >
        Home
      </a>
      <a class="nav-item is-tab 
        {{ Route::currentRouteNamed('create_post') ? 'is-active' : '' }}" 
        href="{{ route('create_post') }}" >
        Add post
      </a>
      @if (Auth::check())
        <span class="nav-item">
          Welcome, {{ Auth::user()->name }}
          &nbsp;
          <a class="button" href="{{ route('logout') }}">
            Log out
          </a>
        </span>
        
      @else
        <span class="nav-item">
          <a class="button" href="{{ route('login') }}">
            Log in
          </a>
          <a class="button is-info" href="{{ route('register') }}">
            Sign up
          </a>
        </span>
      @endif
      
    </div>
  </div>
</nav>
