<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url("https://i.top4top.io/p_1477dqo1n1.jpg");
            background-size: cover;
            margin: 0;
            overflow: hidden;
            font-family: cursive
        }
        .container {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
        }
        .btns {
            margin: auto;
            width: 224px
        }
        .btns button {
            background: none;
            border: none;
            color: #AAA;
            cursor: pointer;
            font-size: 20px;
            width: 100px;
            height: 25px;
            font-family: cursive
        }
        .btns button:hover {
            color: #222
        }
        .btns button:focus {
            outline: none
        }
        form {
            text-align: center;
            margin-top: 30px;
        }
        form .login,
        form .signup {
            display: none
        }
        form .signup input:nth-of-type(3) {
            margin-bottom: 20px
        }
        form .back {
            background-color: rgba(0, 0, 0, .2);
            padding: 30px;
            width: 365px;
            margin: auto;
            border-radius: 90px 40px
        }
        form input {
            padding: 5px 5px 5px 10px;
            border: none;
            width: 250px;
            height: 30px;
            background-color: rgba(0, 0, 0, .5);
            color: #777;
            border-radius: 5px
        }
        form input:first-child,
        form input:nth-of-type(2) {
            margin-bottom: 20px
        }
        form input:last-child {
            min-width: 265px;
            height: 40px;
            font-weight: bold;
            font-size: 15px;
        }
        form input[type="submit"]:hover {
            cursor: pointer
        }
        input:focus {
            border: none;
            outline: none;
            border: none
        }
        input::-webkit-input-placeholder {
            color: #777 !important;
        }
        input:-moz-placeholder {
            color: #777 !important;
        }
        input::-moz-placeholder {
            color: #777 !important;
        }
        input:-ms-input-placeholder {
            color: #777 !important;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="btns">
            <button data-type="login">Login</button>
            <button data-type="signup">SignUp</button>
        </div>

        <form action="">
            <div class="f login">

                <div class="back">
                    <input type="text" placeholder="User name"> <br />
                    <input type="password" placeholder="Password"> <br />
                    <input type="submit" value="Login">
                </div>

            </div>

            <div class="f signup">

                <div class="back">
                    <input type="text" placeholder="Username"> <br />
                    <input type="text" placeholder="Email"> <br />
                    <input type="password" placeholder="Password"> <br />
                    <input type="submit" value="Sign Up">
                </div>

            </div>
        </form>

    </div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/plugins.js"></script>
</body>
<script>
    $(function () {
   
   "use strict";
   
   $("body").width($(document).width());
   $("body").height($(document).height());
   
   // Center Buttons
   
   $(".container").css("paddingTop", ($(document).height() - $(".btns").height() + 12) / 2 + 'px');
   
   // Start Animation
   
   var stat = 0;
   
   $(".btns button").on("click", function () {
       
      
       $(this).siblings().show().end().hide();
       $(this).parent().width(($(this).width() + 12) + "px");
       
       if (stat === 0) {
           
           stat = 1;
           
           $(".container").animate({
          
               paddingTop: "-=200px"

           }, 1000);
           
       }
       
       $(".f").hide();
       
       $("." + $(this).data("type")).fadeIn();
       
   });
   
   // Placeholder Effect
   
   $("input").on({
       "focus": function () {
           $(this).attr("data-type", $(this).attr("placeholder"));
           $(this).attr("placeholder", "");
       },
       
       "blur": function () {
           $(this).attr("placeholder", $(this).attr("data-type"));
       }
   });
   
});
</script>
</html>
