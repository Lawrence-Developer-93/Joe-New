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
        <div id="admin-section">
            <div id="sidemenu">
                <div class="logo"> </div>
                <nav>
                    <a class="active" href="/">
                        <i class="fas fa-search"></i>
                            Search
                    </a>
                    <a class="active" href="/account">
                        <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                    </a>
                    <a class="active" href="/account/projects">
                        <i class="fas fa-briefcase"></i>
                            Projects
                    </a>
                    {{-- <a class="active" href="admin/dashboard.html">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                            Dashboard
                    </a>
                    <a class="active" href="admin/dashboard.html">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                            Dashboard
                    </a> --}}
                </nav>
            </div>
            <div id="content-area">
                @yield('content')
            </div>
        </div>
    </body>
</html>
