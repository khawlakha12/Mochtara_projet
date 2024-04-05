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

    <div class="wrapper"
        style="background-image: url('https://m.media-amazon.com/images/I/81XAj109p1L._AC_UY1100_.jpg');">
        <div class="inner">
            <form action="#" method="POST">
                @csrf
                <h3>Login</h3>
                <div class="form-wrapper">
                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" name="password"placeholder="Password" class="form-control">
                    <i class="zmdi zmdi-lock"></i>
                </div>
                <span>I don't have <a href="/register">Account</a></span>
                <button type="submit">login
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
            <div class="image-holder">
                <img src="Auth/images/hoodies.webp" alt="">
            </div>
            
        </div>
    </div>

</body>

</html>
