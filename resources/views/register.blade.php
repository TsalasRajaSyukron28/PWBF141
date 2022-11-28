<!doctype html>
<html lang="en">
	<head>
		<title>Posyandu EMomma</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				{{-- <div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login EMomma</h2>
				</div> --}}
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/mama.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
								<div class="d-flex">
									<div class="w-100">
										<h3 class="mb-4">Register</h3>
									</div>
											{{-- <div class="w-100">
												<p class="social-media d-flex justify-content-end">
													<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
													<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
												</p>
											</div> --}}
								</div>
								@if(Session::has('success'))
									<div class="alert alert-success">{{Session::get('success')}}</div>
								@endif
								@if(Session::has('error'))
									<div class="alert alert-danger">{{Session::get('error')}}</div>
								@endif
								<form action="{{ route('post_register')}}" method="post" class="signin-form">
									@csrf
									<div class="form-group mt-3">
										<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" {{ old('name') }} required>
										<label class="form-control-placeholder" for="username">Username</label>
										<span class="text-danger">@error('name'){{$message}}@enderror</span>
									</div>
									<div class="form-group mt-3">
										<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" {{ old('email') }} required>
										<label class="form-control-placeholder" for="email">Email</label>
										<span class="text-danger">@error('email'){{$message}}@enderror</span>
									</div>
									<div class="form-group mt-3">
										<input id="password-field" type="password" name="password" class="form-control @error('password') is-invalid @enderror" {{ old('password') }} required>
										<label class="form-control-placeholder" for="password">Password</label>
										<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
										<span class="text-danger">@error('password'){{$message}}@enderror</span>
									</div>
									<div class="form-group mt-3">
										<input id="cpassword-field" type="password" class="form-control @error('cpassword') is-invalid @enderror" name="cpassword" {{ old('cpassword') }} required>
										<label class="form-control-placeholder" for="cpassword">Confirm Password</label>
										<span toggle="#cpassword-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
										<span class="text-danger">@error('cpassword'){{$message}}@enderror</span>
									</div>
									<div class="form-group mt-3">
										<select name="role" id="role" class="form-control">
											<option selected>-- Choose Role --</option>
											<option value="admin">Admin</option>
											<option value="user">User</option>
											<div class="input-group-append">
												<div class="input-group-text">
													<span class=""></span>
												</div>
											</div>
										</select>
									</div>
									<div class="form-group">
										<button type="submit" class="form-control btn btn-primary rounded submit px-3">Register</button>
									</div>
								</form>
								<p class="text-center">Already have an account? <a href="{{ route('login') }}">Login</a></p>
						</div>
					</div>
		        </div>
		    </div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

