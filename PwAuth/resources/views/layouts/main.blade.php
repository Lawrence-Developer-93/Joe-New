<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/219df8834d.js" crossorigin="anonymous"></script>
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>
  <body>
    <header>
        <div class="container">
            <a class="logo" href="/">Design Storm</a>
          <nav>
            @guest
            
            <a href="/register">register</a>
            <a href="/login">login</a>
          
          @else
          <a class="active" href="/account">
            <i class="fas fa-tachometer-alt"></i>
                Dashboard
          </a>
          <a class="active" href="/account/projects">
            <i class="fas fa-briefcase"></i>
                Projects
          </a>
          <a href="/account">{{$user->name}}</a>
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          @endguest
        </nav>
        </div>
    </header>
    @yield('content')
  </body>
</html>