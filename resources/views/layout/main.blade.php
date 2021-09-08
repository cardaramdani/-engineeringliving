@extends('layouts.index_logsheet')

@section('tambahan_link')

@endsection
@section('title')

@endsection

@section('li_tambahan')

@endsection


@section('main-container')

@endsection


@section('tambahan_script')

@endsection



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Home</title>
     


  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active font-weight-bold border border-primary rounded">
        <a class="nav-link text-primary" href="{{ url('/homescreen')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item font-weight-bold ">
        <a class="nav-link text-light" href="{{ url('/SOP')}}">Standar Oprasional Prosedur</a>
      </li>
      
      <li class="nav-item dropdown font-weight-bold">
           <a class="nav-link dropdown-toggle text-light " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PM
           </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/pmgenset')}}">Genset</a>
          <a class="dropdown-item" href="{{ url('/pmpanel')}}">Panel Power</a>
          <a class="dropdown-item" href="{{ url('/pmstp')}}">STP</a>
          <a class="dropdown-item" href="{{ url('/pmpompa')}}">Pompa</a>
          <a class="dropdown-item" href="{{ url('/pmfirepump')}}">Fire Pump</a>
          <a class="dropdown-item" href="{{ url('/gondola')}}">Gondola</a>
          <a class="dropdown-item" href="{{ url('/ac')}}">AC</a>
          <a class="dropdown-item" href="{{ url('/pmfirealarm')}}">Fire Alarm</a>
          <a class="dropdown-item" href="{{ url('/cwt')}}">Clean Water Tank</a>
          <a class="dropdown-item" href="{{ url('/rooftank')}}">Roof Tank</a>
          <a class="dropdown-item" href="{{ url('/hydrant')}}">Hydrant Box</a>
          <a class="dropdown-item" href="{{ url('/toilet')}}">Toilet</a>
          <a class="dropdown-item" href="{{ url('/fan')}}">EF & IF</a>
          </div>
      </li>

      <li class="nav-item dropdown font-weight-bold">
           <a class="nav-link dropdown-toggle text-light " href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Utility
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ url('/watermeterunit')}}">Water Meter Unit</a>
          <a class="dropdown-item" href="{{ url('/kwhmeterunit')}}">Kwh Meter Unit</a>
          
        </div>
      </li>
      <li class="nav-item font-weight-bold ">
        <a class="nav-link text-light" href="{{ url('/beritaacara')}}">Berita Acara</a>
      </li>
      
      
    </ul>
                
    <span class="navbar-text ">
      <ul class="navbar-nav ml-auto" >
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
              <div class="alert alert-success bg-secondary text-success" role="alert">
                <strong>Selamat Datang</strong>
              </div>
              <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle font-weight-bold text-success" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->username }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>

                          <a class="dropdown-item font-weight-bold text-danger" href="{{ url('/user') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('profile-form').submit();">
                              Profile
                          </a>
                          <form id="profile-form" action="/profile/{{Auth::user()->id}}" method="get" style="display: none;">
                              @csrf
                          </form>

                          <a class="dropdown-item font-weight-bold text-danger" href="{{ route('password.change') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('updatepass').submit();">
                              Change Password
                          </a>
                          <form id="updatepass" action="{{ route('password.change') }}" method="get" style="display: none;">
                              @csrf
                          </form>

                          <a class="dropdown-item font-weight-bold text-danger" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              LogOut
                          </a>
                      </div>

                  </li>
          @endguest
      </ul>
    </span>

  </div>
</nav>

    <h3 align="center">Engineering Citra Living</h3>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Ooops!</strong> Ada sesuatu yang salah pada proses upload data<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  
</html>