
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
		<meta charset="UTF-8">
		<meta content="Doctor App" name="description">
		<meta content="SPRUKO™" name="author">
		<title>Doctor App</title>
		<link rel="icon" href="{{asset('backend/assets/images/brand/favicon.ico')}}" type="image/x-icon"/>
		<link href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{asset('backend/assets/css/dark.css')}}" rel="stylesheet" />
		<link href="{{asset('backend/assets/css/skin-modes.css')}}" rel="stylesheet" />
		<link href="{{asset('backend/assets/css/animated.css')}}" rel="stylesheet" />
		<link href="{{asset('backend/assets/plugins/icons/icons.css')}}" rel="stylesheet" />
		<link id="theme" href="{{asset('backend/assets/colors/color1.css')}}" rel="stylesheet" type="text/css"/>
	</head>
	<body class="h-100vh error-bg">
        <div class="register1">
		<div id="global-loader">
			<img src="{{asset('backend/assets/images/svgs/loader.svg')}}" alt="loader">
		</div>
        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-12">
                                    <div class="row p-0 m-0">
                                        <div class="col-md-8 col-lg-6 p-0 mx-auto">
                                        <div class="bg-white text-dark br-7 br-tl-0 br-bl-0">
                                            <div class="card-body">
                                                <div class="text-center mb-3">
                                                    <h1 class="mb-2">Log In</h1>
                                                    <a href="javascript:void(0);" class="">Hello There !</a>
                                                </div>
                                                    <form class="mt-5" method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                    <div class="input-group mb-4">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group" id="Password-toggle">
                                                            <a href="#" class="input-group-text">
                                                            <i class="fe fe-eye" aria-hidden="true"></i>
                                                            </a>
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" />
                                                            <span class="custom-control-label">Remember Me</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <button type="submit" class="btn btn-primary btn-lg w-100 br-7">
                                                            {{ __('Login') }}
                                                        </button>
                                                    </div>
                                                    <div class="form-group fs-13 text-center">
                                                        <a href="{{route('register')}}">Don't Have an Account?</a>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<script src="{{asset('backend/assets/plugins/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/bootstrap/popper.min.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/circle-progress/circle-progress.min.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
        <script src="{{asset('backend/assets/plugins/bootstrap-show-password/bootstrap-show-password.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/custom.js')}}"></script>
	</div>
	</body>
</html>
