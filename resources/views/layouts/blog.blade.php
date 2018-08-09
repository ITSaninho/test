<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/themes/startbootstrap-blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/public/themes/startbootstrap-blog/css/blog-home.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @if(Auth::user())
            <li class="nav-item">
              <a class="nav-link" href="#">You, {{Auth::user()->email}}</a>
            </li>
            @endif
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="/admin">Admin Panel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    @yield('content')
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website {{ date('Y') }}</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="/public/themes/startbootstrap-blog/vendor/jquery/jquery.min.js"></script>
    <script src="/public/themes/startbootstrap-blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
