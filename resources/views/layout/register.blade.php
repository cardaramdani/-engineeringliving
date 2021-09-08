
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Registrasi</title>

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
        background: url(dataIMG_user/1.jpg);
        background-position: center;
        background-size: cover;
        height: 90vh;
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
    <form class="form-signin" method="POST" action="{{route('register')}}" enctype="multipart/form-data">
      @csrf
      <div class="text-center mb-4">
        <img class="mb-4" src="dataIMG_watermeterunit/HOMESCREEN_ENG.JPG" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Registrasi</h1>
      </div>
<input type="hidden" name="jabatan" value="teknisi">
<input type="hidden" name="gambaruser" value="userbaru.jpeg">
      <div class="form-label-group">
        <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="insert your name" required autofocus="" value="{{old('username')}}" autocomplete="off">
        <label for="username">User Name</label>
        @error('username')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
      </div>

      <div class="form-label-group">
                <!-- <label for="departement">Departement</label> -->
                <select id="departement" name="departement" class="form-control">
                  <option selected>Pilih Departement</option>
                  <option select>TR</option>
                  <option select>FA</option>
                  <option select>Engineering</option>
                  <option select>HR-GA</option>
                </select>

        <!-- <input type="text" name="departement" id="departement" class="form-control @error('departement') is-invalid @enderror" placeholder="insert your departement" required autofocus="" value="{{old('departement')}}">
        <label for="departement">Departement</label> -->
        @error('departement')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
      </div>

      <div class="form-label-group">
        <input type="email" name="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{old('email')}}" required autocomplete="off">
        <label for="inputEmail">Email address</label>
        @error('email')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
      </div>

      <div class="form-label-group">
        <input type="number" name="nohp" id="inputnohp" class="form-control @error('nohp') is-invalid @enderror" placeholder="No Whatsap" value="{{old('nohp')}}" required autocomplete="off">
        <label for="inputEmail">No Whatsap</label>
        @error('nohp')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
      </div>



      <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required value="{{old('password')}}" autocomplete="off">
        <label for="inputPassword">Password</label>
        @error('password')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
      </div>

      <div class="form-label-group">
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="confirm password" required autocomplete="off">
        <label for="password_confirmation">Confirm Password</label>
        @error('password_confirmation')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
      </div>


      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <a class="text-center font-weight-bold" href="{{route('login')}}">Back <<<-</a>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2019-2020</p>
</form>
</body>
</html>
