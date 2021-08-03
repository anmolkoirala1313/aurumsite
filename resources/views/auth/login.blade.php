{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{asset('assets/backend//img/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('assets/backend/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/backend/css/lnr-icon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/backend/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/backend/css/style.css')}}">
    <title>Login Page</title>

    <!--[if lt IE 9]>
            <script src="{{asset('assets/backend/js/html5shiv.min.js')}}"></script>
            <script src="{{asset('assets/backend/js/respond.min.js')}}"></script>
            <![endif]-->
</head>
<body>

<div id="loader-wrapper">
    <div class="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>

<div class="inner-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox shadow-sm grow">
                <div class="login-left">
                    <img class="img-fluid" src="{{asset('assets/backend/img/logo.png')}}" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>{{ __('Login') }}</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-theme button-1 text-white ctm-border-radius btn-block" type="submit">Login</button>
                            </div>
                        </form>

{{--                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>--}}
{{--                        <div class="login-or">--}}
{{--                            <span class="or-line"></span>--}}
{{--                            <span class="span-or">or</span>--}}
{{--                        </div>--}}

{{--                        <div class="social-login">--}}
{{--                            <span>Login with</span>--}}
{{--                            <a href="javascript:void(0)" class="facebook"><i class="fa fa-facebook"></i></a><a href="javascript:void(0)" class="google"><i class="fa fa-google"></i></a>--}}
{{--                        </div>--}}

{{--                        <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('assets/backend/js/jquery-3.2.1.min.js')}}"></script>

<script src="{{asset('assets/backend/js/popper.min.js')}}"></script>
<script src="{{asset('assets/backend/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/backend/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/backend/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

<script src="{{asset('assets/backend/js/script.js')}}"></script>
</body>

</html>
