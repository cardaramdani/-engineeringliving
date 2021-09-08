<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="{{asset('/assets/css/login/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    </head>
    <body>

        <!--form area start-->
        <div class="form">
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
            <!--login form start-->
            <form class="login-form" action="{{ route('login') }}" method="post">
                @csrf
                <h2>Login</h2>
                <div class="icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <input type="text" name="username" value="{{old('username')}}" placeholder="Username" required>
                <label for="inputUsername">Username</label>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <input type="password" name="password" value="" placeholder="Password" required autocomplete="off">
                <label for="inputPassword">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                <button type="submit" name="button">Login</button>
                <p class="options">Not Registered? <a href="#">Create an Account</a></p>
            </form>
            <!--login form end-->
        </div>
        <!--form area end-->

    </body>
</html>


































































































<!---->
