<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .add-card {
            display: flex;
            margin: 20px;

        }

        .form {
            background: #000000;
            border: 1px solid white;
            backdrop-filter: 100px;
            animation: kfr-rotate45 2s ! infinite;
            box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01),
                0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09),
                0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
            width: 320px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px;
            position: relative;
            border-radius: 25px;
        }

        .form .label {
            display: flex;
            flex-direction: column;
            gap: 5px;
            height: -moz-fit-content;
            height: fit-content;
        }

        .form .label:has(input:focus) .title {
            top: 0;
            left: 0;
            color: #27a776;
        }

        .form .label .title {
            padding: 0 10px;
            transition: all 300ms;
            font-size: 12px;
            color: #8b8e98;
            font-weight: 600;
            width: -moz-fit-content;
            width: fit-content;
            top: 14px;
            position: relative;
            left: 15px;
            background: #0c0f14;
        }

        .form .input-field {
            width: auto;
            height: 50px;
            text-indent: 15px;
            border-radius: 15px;
            outline: none;
            background-color: transparent;
            border: 1px solid #21262e;
            transition: all 0.3s;
            caret-color: #27a776;
            color: #aeaeae;
        }

        .form .input-field:hover {
            border-color: rgba(209, 121, 66, 0.5);
        }

        .form .input-field:focus {
            border-color: #27a776;
        }

        .form .split {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
            gap: 15px;
        }

        .form .split label {
            width: 130px;
        }

        .form .checkout-btn {
            margin-top: 20px;
            padding: 20px 0;
            border-radius: 25px;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
            cursor: pointer;
            font-size: 20px;
            font-weight: 500;
            display: flex;
            align-items: center;
            border: none;
            justify-content: center;
            fill: #fff;
            color: #fff;
            border: 2px solid transparent;
            background: #27a776;
            transition: all 200ms;
        }

        .form .checkout-btn:active {
            scale: 0.95;
        }

        .form .checkout-btn:hover {
            color: #d17842;
            border: 2px solid #d17842;
            background: transparent;
        }

        .animate-rotate45 {
            animation: kfr-rotate45 2s infinite;
        }

        @keyframes kfr-rotate45 {
            from {
                transform: rotate(45deg);
                opacity: 0;
            }
        }

        .clignote {
            animation: clignotes 1.5s infinite;
        }

        @keyframes clignotes {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .container {
            display: block;
            position: relative;
            cursor: pointer;
            font-size: 20px;
            user-select: none;
        }

        .checkmark {
            position: relative;
            top: 0;
            left: 0;
            height: 1.3em;
            width: 1.3em;
            border: 2px solid #414141;
            border-radius: 5px;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .container input:hover~.checkmark {
            border: 2px solid #27a776;
        }


        .container input:checked~.checkmark {
            box-shadow: 0 0 20px #27a776;
            border: 2px solid #27a776;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .container input:checked~.checkmark:after {
            display: block;
        }

        .container .checkmark:after {
            left: 0.45em;
            top: 0.25em;
            width: 0.25em;
            height: 0.5em;
            border: solid white;
            border-width: 0 0.15em 0.15em 0;
            transform: rotate(45deg);
        }
    </style>
</head>

<body>

    <section class="add-card page">
        <div>
            <form class="form " onclick="setperm()">
                <label for="email" class="label">
                    <span class="title">Your email</span>
                    <input class="input-field" type="email" name="email" title="Input title"
                        placeholder="Enter your full name" />
                </label>
                <label for="name" class="label">
                    <span class="title">Card holder full name</span>
                    <input class="input-field" type="text" name="input-name" title="Input title"
                        placeholder="Enter your full name" />
                </label>
                <label for="serialCardNumber" class="label">
                    <span class="title">Card Number</span>
                    <input id="serialCardNumber" class="input-field" type="number" name="input-name"
                        title="Input title" placeholder="0000 0000 0000 0000" />
                </label>
                <div class="split">
                    <label for="ExDate" class="label">
                        <span class="title">Expiry Date</span>
                        <input id="ExDate" class="input-field" type="text" name="input-name" title="Expiry Date"
                            placeholder="01/23" />
                    </label>
                    <label for="cvv" class="label">
                        <span class="title"> CVV</span>
                        <input id="cvv" class="input-field" type="number" name="cvv" title="CVV"
                            placeholder="CVV" />
                    </label>
                </div>
                <input class="checkout-btn" type="button" value="Checkout" />
            </form>
        </div>
        <div style="margin-left: 20px;width: 500px; " class="form " onclick="setperm()">
            <div
                style="display: flex; align-items: center;border:1px #27a776 solid;border-radius:5px;padding:10px 10px;box-shadow: 0 0 20px #27a776;">
                <img src="img\9obya.png" style="height: 50px;width:50px;border-radius:10px;margin-right:20px;"
                    alt="">
                <div style=" display: flex;flex-direction: column;align-items: center;justify-content: space-between;">
                    <h5>kghjkllhh</h5>
                    <p>100MAD</p>
                </div>
                <label class="container">
                    <input checked="checked" type="checkbox">
                    <div class="checkmark"></div>
                </label>

            </div>
    </section>


</body>

</html>
