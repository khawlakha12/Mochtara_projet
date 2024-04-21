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
        background: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4); 
    }
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; 
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        animation-name: animatetop;
        animation-duration: 0.4s
    }
    @keyframes animatetop {
        from {top: -300px; opacity: 0}
        to {top: 0; opacity: 1}
    }
    .close:hover{
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
        background-color: #27a776;
        color: white;
        transition: right 0.5s;
        z-index: 99;
    }
</style>

</style>

</head>

<body>
    <button onclick="toggleDiv()" id="toggleButton" onmouseover="hovredi()" class="hovermebaby" style="position: absolute; height: 40px; width: 35px; top: 50%; right: 0; z-index: 100;background:#27a776;border-top-left-radius: 10px;  border-bottom-left-radius: 10px;" >
        <svg fill="#000000" width="35px" height="30px" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M891 308H340q-6 0-10.5-4t-5.5-10l-32-164q-2-14-12-22.5T256 99H110q-15 0-25.5 10.5T74 135v5q0 15 10.5 26t25.5 11h102q4 0 7 2.5t4 6.5l102 544q3 19 20 28 8 5 18 5h17q-22 25-21 58.5t25 56.5 57.5 23 58-23 25.5-56.5-22-58.5h186q-23 25-21.5 58.5T693 878t57.5 23 57.5-23 25-56.5-21-58.5h17q15 0 25.5-10.5T865 727v-8q0-15-11-25.5T828 683H409q-6 0-10.5-4t-5.5-9l-10-54q-1-8 4-14t12-5h460q13 0 22.5-8t11.5-21l33-219q3-16-7.5-28.5T891 308z"/></svg>
    </button>
    <div id="infoPanel" style="position: fixed; top: 0; right: -100%; width: 100%; height: 50%; background-color: #27a776; color: white; transition: right 0.5s; z-index: 99;margin-top:5%;">
        <button onclick="toggleDiv()" style="border: #fefefe 2px solide ;color: ">Close Panel</button>
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
                    <a href="#hs-vertically-centered-modal-{{ $product->id }}"
                        class="inline-flex items-center justify-center rounded-md px-5 py-2.5 text-center text-sm font-medium text-black hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 w-1/2"
                        style="background: #27a776;" data-hs-overlay="#hs-vertically-centered-modal">
                        <img src="svg_icon/barcode_code_icon_194645.ico" alt="Shopping" class="mr-2 h-4 w-6">
                        <span class="text-base">Acheter</span>
                    </a>

                </div>
            </div>
        </div>
        <div id="hs-vertically-centered-modal-{{ $product->id }}" class="modal">
            <div class="modal-content bg-white p-6 mx-auto border shadow-lg rounded-md">
                <button style="display: inline-flex; align-items: center; justify-content: center;color:aliceblue;:1px #00000 ;width:30px;height:30px;border-radius:10px;background:black;font-size: 20px;" class="close">&times;</button>
                <div class="container mx-auto">
                    <div class="lg:w-4/5 mx-auto flex flex-wrap">
                        <img alt="{{$product->name}}"
                            class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                            src="{{ asset('storage/' . $product->image) }}">
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <h2 style="display: inline-block; color: white; background-color: black; border: 2px solid black; border-radius: 0.75rem; padding: 0.5rem; margin: 0 auto; font-size: 0.875rem; font-family: 'title-font', sans-serif; width: fit-content;">{{ $product->category->name }}
                            </h2>
                            <h1 style="margin-top:20px;"class="text-gray-900 text-2xl font-bold title-font  mb-1">{{ $product->name }}</h1>
                            <div class="flex mb-4">

                            </div>
                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                                <div class="flex ml-6 items-center">
                                    <span class="mr-3 "style="color:black">Size</span>
                                    <div class="relative">
                                        <select
                                            class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10"style="color:black">
                                            @foreach ($product->sizes as $size)
                                                <option>{{ $size->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="flex ml-6 items-center">
                                    <span class="mr-3" style="color:black">Quantity</span>
                                    <div class="relative">
                                        <select
                                            class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10"style="color:black">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="ana flex justify-between items-center">
                                <span class="text-base font-bold text-slate-900">{{ $product->price }} MAD</span>
                                <button class="inline-flex items-center justify-center rounded-md text-center text-sm font-medium text-black  focus:outline-none focus:ring-4 focus:ring-blue-300 w-1/2"
                                style="     background-color: #021803; 
                                border: none;
                                padding: 10px 10px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;
                                font-size: 16px;
                                margin: 2px 2px;
                                transition-duration: 0.4s;
                                cursor: pointer;">
                            <span class="text-base font-bold text-white">achater</span>
                        </button>
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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
    function toggleDiv() {
        var panel = document.getElementById("infoPanel");
        var button = document.getElementById("toggleButton"); 
    
        if (panel.style.right === "0px") {
            panel.style.right = "-300px"; 
            button.style.display = "block"; 
        } else {
            panel.style.right = "0px"; 
            button.style.display = "none"; 
        }
    }
    </script>
    
    

</body>

</html>
