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
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            height: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .select-container {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.select-container span {
    margin-right: 10px; 
}

.select-container .relative {
    flex-grow: 1;
}
    </style>
</head>

<body>

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
                    <a href="#"
                        class="inline-flex items-center justify-center rounded-md px-5 py-2.5 text-center text-sm font-medium text-black hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-blue-300 w-1/2"
                        style="background: #27a776;" data-hs-overlay="#hs-vertically-centered-modal">
                        <img src="svg_icon/barcode_code_icon_194645.ico" alt="Shopping" class="mr-2 h-4 w-6">
                        <span class="text-base">Acheter</span>
                    </a>

                </div>
            </div>
        </div>
        <div id="hs-vertically-centered-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="container mx-auto">
                    <div class="lg:w-4/5 mx-auto flex flex-wrap">
                        <img alt="ecommerce"
                            class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                            src="{{ asset('storage/' . $product->image) }}">
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $product->category->name }}</h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                            <div class="flex mb-4">
                        
                            </div>
                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
                                <div class="flex ml-6 items-center">
                                    <span class="mr-3 "style="color:black">Size</span>
                                    <div class="relative">
                                        <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10"style="color:black">
                                            @foreach ($product->sizes as $size)
                                            <option>{{ $size->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="flex ml-6 items-center">
                                    <span class="mr-3" style="color:black">Quantity</span>
                                    <div class="relative">
                                        <select class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10"style="color:black">
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
                            <div class="flex">
                                <span class="title-font font-medium text-2xl text-gray-900">{{ $product->price }} MAD</span>
                                <!-- Any buttons or additional options like add to cart would go here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endforeach
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var btn = document.querySelector('a[data-hs-overlay="#hs-vertically-centered-modal"]');
            var modal = document.getElementById('hs-vertically-centered-modal');
            var close = modal.getElementsByClassName('close')[0];

            btn.onclick = function() {
                modal.style.display = "block";
            }

            close.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
    </script>

</body>

</html>
