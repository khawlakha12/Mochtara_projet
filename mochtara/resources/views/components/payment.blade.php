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
            <form method="POST" action="{{ route('checkout') }}" class="form"   onclick="setperm()">
                @csrf
                <label for="email" class="label">
                    <span class="title">Your email</span>
                    <input class="input-field" type="email" name="email" required title="Input title" placeholder="Enter your email" />
                </label>
                <label for="name" class="label">
                    <span class="title">Card holder full name</span>
                    <input class="input-field" type="text" name="input-name" required title="Input title" placeholder="Enter your full name" />
                </label>
                <label for="serialCardNumber" class="label">
                    <span class="title">Card Number</span>
                    <input id="serialCardNumber" class="input-field" type="number" name="serialCardNumber" required title="Input title" placeholder="0000 0000 0000 0000" pattern="\d{4} \d{4} \d{4} \d{4}" />
                </label>
                <div class="split">
                    <label for="ExDate" class="label">
                        <span class="title">Expiry Date</span>
                        <input id="ExDate" class="input-field" type="text" name="ExDate" required title="Expiry Date" placeholder="MM/YY" pattern="\d{2}/\d{2}" />
                    </label>
                    <label for="cvv" class="label">
                        <span class="title">CVV</span>
                        <input id="cvv" class="input-field" type="text" name="cvv" required title="CVV" placeholder="CVV" pattern="\d{3}" />
                    </label>
                </div>
                <input class="checkout-btn" type="submit" value="Checkout" id="checkoutButton"/>
            </form>
            
            
        </div>
        <div style="margin-left: 20px;width: 500px; display: flex; align-items: center;justify-content:center;height:490px;"
            class="form " onclick="setperm()">
            <div
                style="width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; height: 80%; overflow: auto; margin-bottom: 20px;">
                @php
                    $totalPrice = 0;
                @endphp
                           @if (Auth::user() && Auth::user()->commandes)
                           @foreach (Auth::user()->commandes as $commande)
                           @if($commande->status === 'invisible')
                    <div
                        style="display: flex; align-items: center; border: 1px solid #27a776; border-radius: 5px; padding: 10px; box-shadow: 0 0 20px #27a776; width: 80%; margin-bottom: 20px;">
                        <img src="{{ asset('storage/' . $commande->product->image) }}"
                            style="height: 50px; width: 50px; border-radius: 10px; margin-right: 20px;"
                            alt="{{ $commande->product->name }}">
                        <div
                            style="display: flex; flex-direction: column; align-items: center; justify-content: space-between;">
                            <h2>{{ $commande->product->price }} MAD</h2>
                            <h5>{{ $commande->product->name }}</h5>
                        </div>
                        <button onclick="deleteCommande({{ $commande->id }})" style="background: none; border: none; color: red; cursor: pointer;">
                            Delete
                        </button>
                    </div>
                    <script>
                        function deleteCommande(commandeId) {
                            if (confirm('Are you sure you want to delete this item?')) {
                                $.ajax({
                                    url: '/delete-commande/' + commandeId,
                                    type: 'POST',
                                    data: {
                                        _token: '{{ csrf_token() }}', 
                                        _method: 'DELETE' 
                                    },
                                    success: function(result) {
                                        if(result.success) {
                                            $('#commande-' + commandeId).fadeOut(500, function() { $(this).remove(); });
                                        } else {
                                            alert('Error: ' + result.error);
                                        }
                                    },
                                    error: function() {
                                        alert('Error deleting item.');
                                    }
                                });
                            }
                        }
                        </script>

                    @php
                        $totalPrice += $commande->product->price;
                    @endphp
                     @endif
               @endforeach
               @endif
               @if (Auth::user() && Auth::user()->commandes)
                 
               @endif
            </div>
            <div style=" display: flex;align-items: center;justify-content: space-between;">
                <h1 style="margin-right:20px;">Total :</h1>
                <h1>{{ $totalPrice }} MAD </h1>
            </div>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
