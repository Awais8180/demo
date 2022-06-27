

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Doctor App" name="description">
		<meta content="SPRUKO™" name="author">

		<!-- Title -->
		<title>Doctor App</title>

        <!--Favicon -->
		<link rel="icon" href="{{asset('backend/assets/images/brand/favicon.ico')}}" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Style css -->
		<link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" />
		<link href="{{asset('backend/assets/css/dark.css')}}" rel="stylesheet" />
		<link href="{{asset('backend/assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!-- Animate css -->
		<link href="{{asset('backend/assets/css/animated.css')}}" rel="stylesheet" />

		<!---Icons css-->
		<link href="{{asset('backend/assets/plugins/icons/icons.css')}}" rel="stylesheet" />



	    <!-- Color Skin css -->
		<link id="theme" href="{{asset('backend/assets/colors/color1.css')}}" rel="stylesheet" type="text/css"/>



	</head>

	<body class="h-100vh error-bg">


        <div class="register1">


	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="assets/images/svgs/loader.svg" alt="loader">
		</div>
		<!-- End GLOBAL-LOADER -->


        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-12">
                                    <div class="row p-0 m-0">

                                        <div class="col-md-8 col-lg-6 p-0 mx-auto">
                                        <div class="bg-white  text-dark br-7 br-tl-0 br-bl-0">
                                            <div class="card-body">
                                                <div class="text-center mb-3">
                                                    <h1 class="mb-2">Sign Up</h1>
                                                    <a href="javascript:void(0);" class="">Create New Account</a>
                                                </div>
                                                <form class="mt-5" method="POST" action="{{ route('register') }}">
                                                @csrf
                                                    <div class="input-group mb-4">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        <input id="name" type="text" placeholder="Username" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="input-group mb-4">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-mail"></i>
                                                            </div>
                                                        <input  placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group" id="Password-toggle1">
                                                            <a href="#" class="input-group-text">
                                                            <i class="fe fe-eye" aria-hidden="true"></i>
                                                            </a>
                                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Confirm Password">

                                                        </div>
                                                    </div>


                                                    <div class="form-group text-center mb-3">
                                                        <button type="submit" class="btn btn-primary btn-lg w-100 br-7">
                                                            {{ __('Sign Up') }}
                                                        </button>
                                                    </div>
                                                    <div class="form-group fs-13 text-center">
                                                        <a href="{{route('login')}}">Already have account?</a>
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


        <!-- Jquery js-->
		<script src="{{asset('backend/assets/plugins/jquery/jquery.min.js')}}"></script>

		<!-- Bootstrap5 js-->
		<script src="{{asset('backend/assets/plugins/bootstrap/popper.min.js')}}"></script>
		<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!--Othercharts js-->
		<script src="{{asset('backend/assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

		<!-- Circle-progress js-->
		<script src="{{asset('backend/assets/plugins/circle-progress/circle-progress.min.js')}}"></script>

		<!-- Jquery-rating js-->
		<script src="{{asset('backend/assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!-- Show Password -->
		<script src="{{asset('backend/assets/plugins/bootstrap-show-password/bootstrap-show-password.min.js')}}"></script>



		<!-- Custom js-->
		<script src="{{asset('backend/assets/js/custom.js')}}"></script>
	</div>
	</body>
<!-- Mirrored from laravel.spruko.com/azea/azea/register1 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 05:33:54 GMT -->
</html>

