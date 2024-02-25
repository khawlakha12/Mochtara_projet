<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('login/style.css')}}">
    <title>Document</title>
</head>
<body>
    
<section>
    <div class="content">
  
      <div class="left">
        <img src="{{ asset('img/m.png') }}" alt="icon">
        <h1>Mochtara</h1>
      </div>
  
      <div class="right">
        <div class="title">
          <h2>Welcome to Mochtara</h2>
        </div>
        <div class="form">
          <form>
            <div class="inputbox">
              <label>Email</label>
              <input type="email" placeholder="Enter your Email ID" required>
            </div>
            <div class="inputbox">
              <label>Password</label>
              <input type="password" placeholder="Enter your Password" required>
            </div>
            <div class="forgot-password">
             
              <a href="#">Forgot your password?</a>
            </div>
            <div class="create">
              <button type="submit">Create Account</button>
            </div>
            <div class="additional">
              <p>I don't have account <span>Register</span></p>
            </div>
          </form>
          <div class="or">
            <h3>OR</h3>
            <div class="sign">
              <button>
                <ion-icon name="logo-google"></ion-icon> <span>Sign Up with Google</span>
              </button>
              <button>
                <ion-icon name="logo-github"></ion-icon> <span>Sign Up with GitHub</span>
              </button>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </section>
  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>