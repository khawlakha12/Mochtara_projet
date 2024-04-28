<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mochtara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="Auth/css/style.css">
</head>
<body>
    <div class="wrapper" style="background-image: url('https://m.media-amazon.com/images/I/81XAj109p1L._AC_UY1100_.jpg');">
        <div class="inner">
            <div class="image-holder">
                <img src="Auth/images/hoodies.webp" alt="">
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h3>Register</h3>
                <div class="form-group">
                    <input type="text" name="first_name" placeholder="First Name" class="form-control" required>
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" required>
                </div>
                <div class="form-wrapper">
                    <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                    <i class="material-symbols-outlined">email</i>
                </div>
                <div class="form-wrapper">
                    <select name="gender" id="" class="form-control" required>
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    <i class="fa fa-caret-down"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                    <i class="material-symbols-outlined">lock</i>
                </div>

                <span>I have <a href="/log">Account</a></span>
                <button type="submit">Register
                    <i class="material-symbols-outlined">arrow_forward</i>
                </button>
            </form>
        </div>
    </div>
</body>
</html>