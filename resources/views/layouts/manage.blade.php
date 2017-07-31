<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel CMS Management</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav has-shadow" >
  <div class="container">
    <div class="nav-left">
      <a class="nav-item is-paddingless" href="{{route('home')}}">
        <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer logo">
      </a>
      <a class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
      <a class="nav-item is-tab is-hidden-mobile">Discuss</a>
      <a class="nav-item is-tab is-hidden-mobile">Share</a>
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu" style="overflow: visible">
      <a class="nav-item is-tab is-hidden-tablet is-active">Learn</a>
      <a class="nav-item is-tab is-hidden-tablet">Discuss</a>
      <a class="nav-item is-tab is-hidden-tablet">Share</a>
      @if (Auth::guest())
        <a href="{{route('login')}}" class="nav-item is-tab">Login</a>
        <a href="{{route('register')}}" class="nav-item is-tab">Join the Community</a>
      @else
        <button class="dropdown is-aligned-right nav-item is-tab" >
          Hey {{ Auth::user()->name }}
          <ul class="dropdown-menu" style="overflow: visible;">
            <li><a href="#">
                  <span class="icon">
                    <i class="fa fa-fw fa-user-circle-o m-r-5"></i>
                  </span>Profile
                </a>
            </li>
            <li><a href="#">
                  <span class="icon">
                    <i class="fa fa-fw fa-bell m-r-5"></i>
                  </span>Notifications
                </a>
            </li>
            <li><a href="{{route('manage.dashboard')}}">
                  <span class="icon">
                    <i class="fa fa-fw fa-cog m-r-5"></i>
                  </span>Manage
                </a>
            </li>
            <li class="seperator"></li>
            <li><a href="{{route('logout')}}" >
                  <span class="icon">
                    <i class="fa fa-fw fa-sign-out m-r-5"></i>
                  </span>
                  Logout
                </a>
            </li>
          </ul>
        </button>
      @endif
    </div>
  </div>
</nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
