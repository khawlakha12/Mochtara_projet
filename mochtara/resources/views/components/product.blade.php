<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 2;
            left: 0;
            top: 0;
            width: 100%;
            overflow: hidden;
            background: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        .close:hover {
            color: red;
        }

        #toggleButton {
            position: absolute;
            height: 40px;
            width: 35px;
            top: 50%;
            right: 0;
            z-index: 100;
            background: #27a776;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        #infoPanel {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100%;
            background-color: #020202;
            color: white;
            transition: right 0.5s;
            z-index: 99;
        }
    </style>
    <style>
        .button {
            --width: 100px;
            --height: 35px;
            --tooltip-height: 35px;
            --tooltip-width: 90px;
            --gap-between-tooltip-to-button: 18px;
            --button-color: #27a776;
            --tooltip-color: #fff;
            width: var(--width);
            height: var(--height);
            background: var(--button-color);
            position: relative;
            text-align: center;
            border-radius: 0.45em;
            font-family: "Arial";
            transition: background 0.3s;
        }

        .button::before {
            position: absolute;
            content: attr(data-tooltip);
            width: var(--tooltip-width);
            height: var(--tooltip-height);
            background-color: #555;
            font-size: 0.9rem;
            color: #fff;
            border-radius: .25em;
            line-height: var(--tooltip-height);
            bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) + 10px);
            left: calc(50% - var(--tooltip-width) / 2);
        }

        .button::after {
            position: absolute;
            content: '';
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-top-color: #555;
            left: calc(50% - 10px);
            bottom: calc(100% + var(--gap-between-tooltip-to-button) - 10px);
        }

        .button::after,
        .button::before {
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s;
        }

        .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button-wrapper,
        .text,
        .icon {
            overflow: hidden;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            color: #fff;
        }

        .text {
            top: 0
        }

        .text,
        .icon {
            transition: top 0.5s;
        }

        .icon {
            color: #fff;
            top: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon svg {
            width: 24px;
            height: 24px;
        }

        .button:hover {
            background: #27a776;
        }

        .button:hover .text {
            top: -100%;
        }

        .button:hover .icon {
            top: 0;
        }

        .button:hover:before,
        .button:hover:after {
            opacity: 1;
            visibility: visible;
        }

        .button:hover:after {
            bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) - 20px);
        }

        .button:hover:before {
            bottom: calc(var(--height) + var(--gap-between-tooltip-to-button));
        }

        .butto {
            position: relative;
            overflow: hidden;
            height: 3rem;
            padding: 0 1rem;
            border-radius: 10px;
            background: #050506;
            background-size: 300%;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .butto:hover::before {
            transform: scaleX(1);
        }

        .button-content {
            position: relative;
            z-index: 1;

        }

        .butto::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: 0 50%;
            width: 100%;
            height: inherit;
            border-radius: inherit;
            background: linear-gradient(82.3deg,
                    #27a776 10.8%,
                    #3bb183 94.3%);
            transition: all 0.475s;
        }
    </style>
</head>

<body>
    <button onclick="toggleDiv()" id="toggleButton" onmouseover="hovredi()" class="hovermebaby"
        style="position: absolute; height: 40px; width: 35px; top: 50%; right: 0; z-index: 100;background:#27a776;border-top-left-radius: 10px;  border-bottom-left-radius: 10px;">
        <svg fill="#000000" width="35px" height="30px" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z" />
        </svg>
    </button>
    <style>

    </style>
    <div id="infoPanel" onclick="toggleDiv()"
        style="position: fixed; top: 0; right: -100%; width: 100%; height: 100%; background: #ffffff63; backdrop-filter: blur(5px); color: white; transition: right 0.5s; z-index: 99; display: flex; justify-content: center; align-items: center; margin-top: 5%; overflow-y: auto;">
        <x-payment />

    </div>

    @foreach ($products as $product)
        <div class="relative m-10 overflow-hidden rounded-lg bg-white shadow-md product" style="height: 74%;width:78%;"
            data-category="{{ $product->category->name }}">

            <a href="#"
                style="display: flex; justify-content: center; align-items: center; width: 100%; height: 60%; margin: auto; text-decoration: none;">
                <img class="rounded-t-lg" style="width: 90%; height: 95%; object-fit: cover; border-radius: 8px;"
                    src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" />
            </a>
            <span
                class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white">{{ $product->category->name }}</span>
            <div class="mt-3 px-3 pb-5">
                <a href="#">
                    <h5 class="text-lg font-semibold tracking-tight text-slate-900" name="name">{{ $product->name }}
                    </h5>
                </a>
                <div class="mt-2.5 mb-3 flex items-center">
                    <span class="mr-2 rounded bg-yellow-200 px-2.5 py-0.5 text-xs font-semibold">5.0</span>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                    <svg aria-hidden="true" class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                        </path>
                    </svg>
                </div>
                <div class="flex items-center justify-between">
                    <p class="flex flex-col">
                        <span class="text-base font-bold text-slate-900">{{ $product->price }} MAD</span>
                    </p>
                    <a href="#hs-vertically-centered-modal-{{ $product->id }}">
                        <div data-tooltip="{{ $product->price }}DH" class="button">
                            <div class="button-wrapper">
                                <div class="text">Acheter</div>
                                <span class="icon">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16"
                                        width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="hs-vertically-centered-modal-{{ $product->id }}" class="modal" style="display: none;">
            <div class="modal-content bg-white p-6 mx-auto border shadow-lg rounded-md">
                <button onclick="document.getElementById('hs-vertically-centered-modal-{{ $product->id }}').style.display = 'none';" class="close" style="display: inline-flex; align-items: center; justify-content: center; color: aliceblue; background: black; width: 30px; height: 30px; border-radius: 10px; font-size: 20px;">&times;</button>
                <div class="container mx-auto">
                    <div class="lg:w-4/5 mx-auto flex flex-wrap">
                        <img alt="{{ $product->name }}" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{ asset('storage/' . $product->image) }}">
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <h2 class="product-category" style="display: inline-block; color: white; background-color: black; border: 2px solid black; border-radius: 0.75rem; padding: 0.5rem; font-size: 0.875rem; font-family: 'title-font', sans-serif; width: fit-content;">{{ $product->category->name }}</h2>
                            <h1 class="text-gray-900 text-2xl font-bold title-font mb-1">{{ $product->name }}</h1>
                            <form action="{{ route('commande.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                                    <div class="flex ml-6 items-center">
                                        <span class="mr-3" style="color:black">Size</span>
                                        <select name="size_id" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                                            @foreach ($product->sizes as $size)
                                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex ml-6 items-center">
                                        <span class="mr-3" style="color:black">Quantity</span>
                                        <select name="quantity" class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-base font-bold text-slate-900">{{ $product->price }} MAD</span>
                                    @auth
                                        <button class="butto" type="submit">
                                            <span class="button-content">Acheter</span>
                                        </button>
                                    @endauth
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <script>
        function addToPayment(button) {
            const productId = button.getAttribute('data-product-id');

            fetch('/add-to-payment', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        product_id: productId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Success:', data);
                    window.location.href = '/payment'; // Redirect to the payment page
                })
                .catch((error) => {
                    console.error('Error:', error);
                });
        }
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.querySelectorAll('[id^="hs-vertically-centered-modal-"]').forEach(modal => {
                const modalId = modal.id;
                const button = document.querySelector(`a[href="#${modalId}"]`);
                const closeButton = modal.querySelector('.close');

                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    modal.style.display = 'block';
                });

                closeButton.addEventListener('click', function() {
                    modal.style.display = 'none';
                });
            });

            window.onclick = function(event) {
                document.querySelectorAll('.modal').forEach(modal => {
                    if (event.target === modal) {
                        modal.style.display = "none";
                    }
                });
            };
        });
    </script>

    <script>
        var perm = true

        function setperm() {
            perm = false
        }

        function toggleDiv() {
            if (perm) {

                var panel = document.getElementById("infoPanel");
                var button = document.getElementById("toggleButton");

                if (panel.style.right === "0px") {
                    panel.style.right = "-100%";
                    button.style.display = "block";
                } else {
                    panel.style.right = "0px";
                    button.style.display = "none";
                }
            } else {
                perm = true
            }

        }
    </script>



</body>

</html>
