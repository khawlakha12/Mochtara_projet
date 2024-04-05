<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mochtara</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="Auth/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="Auth/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('https://m.media-amazon.com/images/I/81XAj109p1L._AC_UY1100_.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="Auth/images/hoodies.webp" alt="">
				</div>
				<form action="{{ route('register.submit') }}" method="POST">
					@csrf
					<h3>Register</h3>
					<div class="form-group">
						<input type="text" name ="first_name" placeholder="First Name" class="form-control">
						<input type="text" name ="last_name" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-wrapper">
						<input type="email" name="email" placeholder="Email Address" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
					<div class="form-wrapper">
						<select name="gender" id="" class="form-control">
							<option value="" disabled selected>Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password" name="password"placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
                    <span>I have <a href="">Account</a></span>
					<button type="submit">Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>