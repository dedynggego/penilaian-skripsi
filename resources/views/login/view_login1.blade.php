<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SIPENSI</title>
    <link rel="stylesheet" href="{{asset('/')}}dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="{{asset('/')}}dist/assets/css/app.css">
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <!-- /.login-logo -->
                    <div class="card card-outline card-primary">
                        <div class="card-header text-center">
                            <h1><strong>Login</strong></h1>
                        </div>
                        <div class="card-body">
                            <p class="login-box-msg">Sign in to start your session</p>

                            <form action="{{ url('login/proses') }}" method="post">
                                @csrf
                                <div class="form-group position-relative has-icon-left">
                                    <input autofocus type="text" class="form-control @error('username')
            is-invalid
          @enderror" placeholder="Username" , name="username">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>

                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group position-relative has-icon-left">
                                    <div class=" position-relative">
                                        <input type="password" class="form-control @error('password')
            is-invalid
          @enderror" placeholder="Password" , name="password">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>



                                <div class="row">
                                    <!-- /.col -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('/')}}dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="{{asset('/')}}dist/assets/js/app.js"></script>

    <script src="{{asset('/')}}dist/assets/js/main.js"></script>
</body>

</html>