
<!doctype html>
<html class="no-js" lang="">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{ ('Poly Pack') }}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ $settings->favicon ? asset('uploads/'.$settings->favicon) : asset('uploads/no_image.jpg') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('auth_assets/css/bootstrap.min.css')}}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('auth_assets/css/fontawesome-all.min.css')}}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('auth_assets/font/flaticon.css')}}">
	<!-- Star Animation CSS -->
	<link rel="stylesheet" href="{{ asset('auth_assets/css/star-animation.css')}}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('auth_assets/style.css')}}">
</head>

<body class="overflow-hidden">
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    {{-- <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div> --}}
    {{-- class for animation add in section fxt-template-animation --}}
	<section class="fxt-template-layout22" data-bg-image="{{ asset('auth_assets/img/figure/chatpp.png')}}">
		<!-- Star Animation Start Here -->
		<div class="star-animation">
			<div id="stars1"></div>
			<div id="stars2"></div>
			<div id="stars3"></div>
			<div id="stars4"></div>
			<div id="stars5"></div>
		</div>
		<!-- Star Animation End Here -->
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-12 fxt-none-991">
					<div class="fxt-header">
						{{-- <div class="fxt-transformY-50 fxt-transition-delay-1">
							<a href="login-22.html" class="fxt-logo"><img src="{{ asset('auth_assets/img/logo-22.png')}}" alt="Logo"></a>
						</div>
						<div class="fxt-transformY-50 fxt-transition-delay-2">
							<h1>Hospital Management System</h1>
						</div>
						<div class="fxt-transformY-50 fxt-transition-delay-3">
							<p>Grursus mal suada faci lisis Lorem ipsum dolarorit more ametion consectetur elit. Vesti at bulum nec odio aea the dumm ipsumm ipsum that dolocons rsus mal suada and fadolorit to the dummy consectetur elit the Lorem Ipsum genera.</p>
						</div> --}}
					</div>
				</div>
				<div class="col-lg-5 col-12 fxt-bg-color">
					<div class="fxt-content">
                        <div class="fxt-transformY-50 fxt-transition-delay-1 text-center mb-3">
							<img src="{{ $settings->logo ? asset('uploads/'.$settings->logo) : asset('uploads/no_image.jpg') }}" alt="Logo" style="max-height: 100px">
						</div>
						<div class="fxt-form">
							<h3 class="mb-1">{{ $settings->school_name }}</h3>
							{{-- <h3 class="mb-1">Login</h3> --}}
							<p>Login into your pages account</p>
							<form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group mb-2">
									<label for="email" class="input-label">Email Address</label>
									<input type="email" id="email" class="form-control" name="email" placeholder="demo@gmail.com" required="required" @if (Cookie::has('email')) value="{{ Cookie::get('email') }}" @endif>
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
								</div>
								<div class="form-group">
									<label for="password" class="input-label">Password</label>
									<input id="password" type="password" class="form-control" name="password" placeholder="********" required="required" @if (Cookie::has('password')) value="{{ Cookie::get('password') }}" @endif>
									<i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                    @error('password') <span class="text-danger">{{ $message }}</span> @enderror
								</div>
								<div class="form-group">
									<div class="fxt-checkbox-area">
										<div class="checkbox">
											<input id="checkbox1" type="checkbox" name="remember_me" @if (Cookie::has('email')) checked @endif>
											<label for="checkbox1">Keep me logged in</label>
										</div>
										{{-- <a href="{{ route('password.request') }}" class="switcher-text">Forgot Password</a> --}}
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="fxt-btn-fill">Log in</button>
								</div>
							</form>
						</div>
						{{-- <div class="fxt-style-line">
							<h3>Or Login With Email</h3>
						</div>
						<ul class="fxt-socials">
							<li class="fxt-facebook"><a href="#" title="Facebook">Twitter</a></li>
							<li class="fxt-twitter"><a href="#" title="twitter">Facebook</a></li>
							<li class="fxt-google"><a href="#" title="google">Google +</a></li>
							<li class="fxt-linkedin"><a href="#" title="linkedin">Linkedin</a></li>
						</ul>
						<div class="fxt-footer">
							<p>Don't have an account?<a href="register-22.html" class="switcher-text2 inline-text">Register</a></p>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- jquery-->
	<script src="{{ asset('auth_assets/js/jquery-3.5.0.min.js')}}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('auth_assets/js/bootstrap.min.js')}}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('auth_assets/js/imagesloaded.pkgd.min.js')}}"></script>
	<!-- Validator js -->
	<script src="{{ asset('auth_assets/js/validator.min.js')}}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('auth_assets/js/main.js')}}"></script>

</body>

</html>