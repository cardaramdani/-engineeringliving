
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <title>Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->

<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      body{
        margin: 0;
        padding: 0;
        font-family: "Roboto", sans-serif;
        background: url(assets/css/Sidebar_submenu/balls.jpg);
        background-position: center;
        background-size: cover;
        height: 100vh;
      }

    body form.form-signin div.text-center.mb-4 h1{
        color:#f8f8f8;
        border:ridge;
        background: #393e3fd1;
    }
    body form.form-signin div.social-icons a{
        font-size:xxx-large;
        padding:10px;
        margin-left:80px;
    }

      body form.form-signin a.btn.btn-link{
        font-weight: 400;
        color: red;
        text-decoration: none;
      }

       body form.form-signin a.btn.btn-link:hover{
        font-weight: 400;
        color: white;
        text-decoration: none;
      }

      body form.form-signin p.text-muted span
      {
        font-weight: 400;
        color: deepskyblue;
        text-decoration: none;
        transition: 0.5s;
        transition-property: color;
      }


      body form.form-signin p.text-muted a{
        font-weight: 400;
        color: #00ff1f;
        text-decoration: none;
        transition: 0.5s;
        transition-property: background;
      }

      body form.form-signin p.text-muted a:hover{
        background: white;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>
  <body>

    <form class="form-signin" method="POST" action="{{route('login')}}">
      @csrf
      <div class="text-center mb-4">
        <img class="mb-4" src="dataIMG_user/logo.png" alt="" style="width:320px; height:90px;" >
        <h1 class="h3 mb-3 font-weight-normal ">Welcome to Building Management App</h1>


        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        @if ($message=Session::get('error'))
          <div class="alert alert-danger">

            <strong>{{$message}}</strong>
          </div>
        @endif
      </div>

      <div class="form-label-group">
        <input type="text" name="username" id="inputUsername" class="form-control @error('username') is-invalid @enderror" placeholder="insert your name" value="{{old('username')}}" required autofocus autocomplete="off">
        <label for="inputUsername">Username</label>
        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" autocomplete="current-password" required autocomplete="off">
        <label for="inputPassword">Password</label>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
        </label>

      </div> -->
        <!-- <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div> -->
        <!-- <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div> -->


      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      @if (Route::has('password.request'))
            <a href="#">Forgot password ?</a>
            <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Click Here') }}
            </a>

        @endif
      <!-- <p class=" text-muted"> <span> Belum punya akun ? </span><a href="{{route('register')}}">Registrasi donk!!!</a></p> -->

      <p class="mt-5 mb-3 text-muted text-center"> <span>&copy; Carda Ramdani 2020-2021</span> </p>
      <div class="social-icons">
            <!-- <a class="social-icon" href="https://www.linkedin.com/in/carda-rdm-374835177"><i class="fab fa-linkedin-in"></i></a> -->
            <a class="social-icon" href="mailto:carda.ramdani@gmail.com"><i class="fas fa-envelope"></i></a>
            <a class="social-icon" href="https://t.me/carda_rmd"><i class="fab fa-telegram-plane"></i></a>

        </div>
</form>
</body>
</html>
