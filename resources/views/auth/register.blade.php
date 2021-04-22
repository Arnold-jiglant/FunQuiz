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
        <div class="col-md-9 col-lg-7 col-xl-5">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center">
                            <h4 class="text-dark mb-4">Create an Account!</h4>
                        </div>
                        <form class="user">
                            <div class="form-group"><input class="form-control form-control-user" type="email"
                                                           id="exampleInputEmail" aria-describedby="emailHelp"
                                                           placeholder="Username" name="email"></div>
                            <div class="form-group"><input class="form-control form-control-user" type="email"
                                                           id="exampleInputEmail" aria-describedby="emailHelp"
                                                           placeholder="Email or Phone Number" name="email"></div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                                                          type="password" id="examplePasswordInput"
                                                                          placeholder="Password" name="password"></div>
                                <div class="col-sm-6"><input class="form-control form-control-user" type="password"
                                                             id="exampleRepeatPasswordInput"
                                                             placeholder="Repeat Password" name="password_repeat"></div>
                            </div>
                            <button class="btn btn-primary btn-block text-white btn-user" type="submit">Register
                                Account
                            </button>
                            <hr>
                            <a class="btn btn-primary btn-block text-white btn-google btn-user" role="button"><i
                                    class="fab fa-google"></i>&nbsp; Register with Google</a><a
                                class="btn btn-primary btn-block text-white btn-facebook btn-user" role="button"><i
                                    class="fab fa-facebook-f"></i>&nbsp; Register with Facebook</a>
                            <hr>
                        </form>
                        <div class="text-center"><a class="small" href="#">Forgot Password?</a></div>
                        <div class="text-center"><a class="small" href="{{route('login')}}">Already have an account? Login!</a>
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
