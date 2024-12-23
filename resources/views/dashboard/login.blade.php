<!DOCTYPE html>
<html lang="en">
<head>
	<title>ROOTS venture studio | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('assets/loginForm/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/loginForm/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/loginForm/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/loginForm/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/loginForm/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/loginForm/vendor/select2/select2.min.css')}}">  
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/loginForm/css/util.css')}}"> 

	<link rel="stylesheet" type="text/css" href="{{asset('assets/loginForm/css/main.css')}}
">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('assets/loginForm/images/img-01.png')}}" alt="IMG">   
				</div>
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					<span class="login100-form-title"> @csrf
						Dashboard Login

					{{--	<a href="{{route('admin.mail.login', ['id' => '40b0dd77-cc1a-4419-be91-b95cdf6fe2de'])}}"> login here</a> --}}
					
					</span>

					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>


					<div class="text-center p-t-12">
						<span class="txt1">
						</span>
						<a class="txt2" href="#">
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							<i class="fa  m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	
<!--===============================================================================================-->	
	<script src="{{asset('assets/loginForm/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/loginForm/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/loginForm/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/loginForm/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/loginForm/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/loginForm/js/main.js')}}"></script>

</body>
</html>