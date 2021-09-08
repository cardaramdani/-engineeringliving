</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">NavBar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active font-weight-bold">
        <a class="nav-link" href="{{ url('/homescreen')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="{{ url('/SOP')}}">SOP</a>
      </li>
      <li class="nav-item dropdown font-weight-bold">
           <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LogSheet
           </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/genset')}}">Genset</a>
          <a class="dropdown-item" href="{{ url('/PowerHouse')}}">Power House</a>
          <a class="dropdown-item" href="{{ url('/amr')}}">AMR</a>
          <a class="dropdown-item" href="{{ url('/stp')}}">STP</a>
          <a class="dropdown-item" href="{{ url('/pdam')}}">PDAM</a>
          <a class="dropdown-item" href="{{ url('/transferpump')}}">Transfer Pump</a>
          <a class="dropdown-item" href="{{ url('/boosterpump')}}">Booster Pump</a>
          <a class="dropdown-item" href="{{ url('/sumpitpump')}}">Sumpit Pump</a>
          <a class="dropdown-item" href="{{ url('/firepump')}}">Fire Pump</a>
          <a class="dropdown-item" href="{{ url('/logbook')}}">LogBook</a>
          
          
          </div>
      </li>
      <li class="nav-item dropdown font-weight-bold">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Utility
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/watermeterunit')}}">Water Meter Unit</a>
          <a class="dropdown-item" href="{{ url('/kwhmeterunit')}}">Kwh Meter Unit</a>
          
        </div>
      </li>
      <li class="nav-item font-weight-bold">
        <a class="nav-link" href="beritaacara">Berita Acara</a>
      </li>
      <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    </ul>
    <form  class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Unit" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

  </div>
</nav>