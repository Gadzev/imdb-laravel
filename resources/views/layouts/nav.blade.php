<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">IMDB Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
            @auth
            <li class="nav-item active">
              <a style="float:left;" class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
              <a class="nav-link" style="float:right;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>
            @else
            <li class="nav-item">
              
                <a class="nav-link" style="float:left;" href="{{ route('login') }}">Login</a>
                <a class="nav-link" style="float:right;" href="{{ route('register') }}">Register</a>
            </li>
            @endauth
            @endif
          </ul>
        </div>
      </div>
    </nav>

   