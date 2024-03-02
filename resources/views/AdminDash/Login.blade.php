<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" href="{{ asset('img/logo1.png') }}" sizes="32x32" />

        <link rel="icon" href="{{ asset('img/logo1.png') }}" sizes="192x192" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/vendor/bootstrap/css/bootstrap.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/fonts/iconic/css/material-design-iconic-font.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/vendor/animate/animate.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/vendor/css-hamburgers/hamburgers.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/vendor/animsition/css/animsition.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/vendor/select2/select2.min.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/vendor/daterangepicker/daterangepicker.css') }}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/css/util.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('AdminDash/css/main.css') }}">
        <!--===============================================================================================-->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 h-[600px]">
				<form class="login100-form validate-form" action="{{ route('loginRequest') }}" method="POST">
                    @csrf <!-- CSRF token for security -->

					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48 flex justify-center">
						<img src="{{ asset('img/logo1.png') }}" alt="" class="w-12 justify-center">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					{{-- <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div> --}}
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('AdminDash/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('AdminDash/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('AdminDash/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('AdminDash/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('AdminDash/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('AdminDash/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('AdminDash/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('AdminDash/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('AdminDash/js/main.js') }}"></script>


</body>
</html>
