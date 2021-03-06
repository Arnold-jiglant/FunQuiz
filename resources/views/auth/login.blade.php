<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - {{env('APP_NAME')}}</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
</head>

<body class="bg-gradient-primary">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Welcome Back!</h4>
                        </div>
                        <form class="user" method="POST" action="{{route('login')}}">
                            @csrf
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                            <div class="form-group">
                                <input class="form-control form-control-user" type="text"
                                       placeholder="Enter Email or Phone number" name="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-user"
                                       type="password" placeholder="Password"
                                       name="password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <div class="form-check">
                                        <input class="form-check-input custom-control-input"
                                               type="checkbox" id="formCheck-1" name="remember">
                                        <label class="form-check-label custom-control-label" for="formCheck-1">Remember
                                            Me</label></div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit">Login</button>
                            <hr>
                            <a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i
                                    class="fab fa-google"></i>&nbsp; Login with Google</a><a
                                class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i
                                    class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="#">Forgot Password?</a></div>
                        <div class="text-center"><a class="small" href="{{route('register')}}">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>
