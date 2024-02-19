<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>interface</title>
  <style>
    img:hover {
      filter: grayscale(100%);
    }

    button {
      position: relative;
      display: inline-block;
      cursor: pointer;
      outline: none;
      border: 0;
      vertical-align: middle;
      text-decoration: none;
      background: transparent;
      padding: 0;
      font-size: inherit;
      font-family: inherit;
    }

    button.learn-more {
      width: 12rem;
      height: auto;
    }

    button.learn-more .circle {
      transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
      position: relative;
      display: block;
      margin: 0;
      width: 3rem;
      height: 3rem;
      background: #040404;
      border-radius: 1.625rem;
    }

    button.learn-more .circle .icon {
      transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
      background: #fff;
    }

    button.learn-more .circle .icon.arrow {
      transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
      left: 0.625rem;
      width: 1.125rem;
      height: 0.125rem;
      background: none;
    }

    button.learn-more .circle .icon.arrow::before {
      position: absolute;
      content: "";
      top: -0.29rem;
      right: 0.0625rem;
      width: 0.625rem;
      height: 0.625rem;
      border-top: 0.125rem solid #fff;
      border-right: 0.125rem solid #fff;
      transform: rotate(45deg);
    }

    button.learn-more .button-text {
      transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      padding: 0.75rem 0;
      margin: 0 0 0 1.85rem;
      color: #050505;
      font-weight: 700;
      line-height: 1.6;
      text-align: center;
      text-transform: uppercase;
    }

    button:hover .circle {
      width: 100%;
    }

    button:hover .circle .icon.arrow {
      background: #fff;
      transform: translate(1rem, 0);
    }

    button:hover .button-text {
      color: #fff;
    }
  </style>
</head>

<body>
  <nav class="bg-gray-100 border-gray-200 py-2.5 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
      <a href="#" class="flex items-center">
        <img src="img/logo2.png" class="h-6 mr-3 sm:h-9" alt="mochtara Logo">
      </a>
      <div class="flex items-center lg:order-2">
        <div class="mt-2 mr-4 sm:inline-block">
          <span></span>
        </div>
        <div class="flex grid-cols-2 gap-5">
        <button href="#" class="">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
          
        </button>
        <a href="login/login.html"
          class="text-white bg-black hover:bg-gray-700 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-base px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-black dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-purple-800">
          sign-up</a>
        <button data-collapse-toggle="mobile-menu-2" type="button"
          class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
          aria-controls="mobile-menu-2" aria-expanded="true">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      </div>
      <div class="items-center justify-between w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
          <li>
            <a href="index.html"
              class="block py-2 pl-3 pr-4 text-gray-700 border-b text-base border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
              aria-current="page">Home</a>
          </li>
          <li>
            <a href="shop.html"
              class="block py-2 pl-3 pr-4 text-gray-700 border-b text-base border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Shop</a>
          </li>
          <li>
            <a href="design.html"
              class="block py-2 pl-3 pr-4 text-gray-700 border-b text-base border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Design</a>
          </li>
          <li>
            <a href="contact.html"
              class="block py-2 pl-3 pr-4 text-gray-700 border-b text-base border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-purple-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <section class="px-3 py-5 bg-neutral-100 lg:py-10 mt-20">
    <div class="grid lg:grid-cols-2 items-center justify-items-center gap-2 ">
      <div class="order-2 lg:order-1 flex flex-col justify-center items-center">
        <p class="text-4xl font-bold md:text-7xl text-orange-600">25% OFF</p>
        <p class="text-4xl font-bold md:text-7xl">Awesome Designs
        </p>
        <p class="text-4xl font-bold md:text-7xl">For You</p>
        <button class="text-base md:text-base bg-black italic text-white py-2 px-5 mt-20 hover:bg-zinc-800 rounded-lg">Shop
          Now</button>
      </div>
      <div class="order-1 lg:order-2 flex gap-5">
        <div>
          <img class="h-80 w-80 object-cover lg:w-[500px] lg:h-[500px] rounded-lg " src="img/9obya.png" alt="">

        </div>
        <div>
          <img class="h-80 w-80 object-cover lg:w-[500px] lg:h-[500px] rounded-lg " src="img/9obya.png" alt="">

        </div>
      </div>
    </div>
  </section>
  <section class="mt-24">
    <ul class="flex justify-center mt-5 space-x-5 ">
      <li>
        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
          <svg class="w-8 h-8 text-blue-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
          </svg>
        </a>
      </li>
      <li>
        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
          <svg class="w-8 h-8 text-green-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path
              d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
            </path>
          </svg>
        </a>
      </li>
      <li>
        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
          <svg class="w-8 h-8 text-gray-400 text-blue-400 fill-current" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 496 512">
            <path
              d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z">
            </path>
          </svg>
        </a>
      </li>
      <li>
        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
          <svg class="w-8 h-8 text-blue-300 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
          </svg>
        </a>
      </li>
    </ul>
  </section>
  <h2 class="flex flex-row flex-nowrap items-center mt-24">
    <span class="flex-grow block border-t border-black"></span>
    <span class="flex-none block mx-4 px-4 py-2.5 text-xl  leading-none font-medium bg-black text-white">
      TOP INTERESTING
    </span>
    <span class="flex-grow block border-t border-black"></span>
  </h2>
  <section class="mb-8 mt-6">
    <div class="justify-center flex flex-wrap">
      <div class="group my-12 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
        <a class="relative flex h-60 overflow-hidden" href="#">
          <img class="absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80" alt="product image" />
          <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
            <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
            <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div>
            <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div> 
          </div>
          <div class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
            <button class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </a>
        <div class="mt-4 px-5 pb-5">
          <a href="#">
            <h5 class="text-xl tracking-tight text-slate-900">Lululemon Comfort Tee - White</h5>
          </a>
          <div class="mt-2 mb-5 flex items-center justify-between">
            <p>
              <span class="text-3xl font-bold text-slate-900">$79</span>
              <span class="text-sm text-slate-900 line-through">$99</span>
            </p>
          </div>
          <button class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            Add to cart
          </button>
        </div>
      </div>
      <div class="group my-12 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
        <a class="relative flex h-60 overflow-hidden" href="#">
          <img class="absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80" alt="product image" />
          <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
            <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
            <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div>
            <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div> 
          </div>
          <div class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
            <button class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </a>
        <div class="mt-4 px-5 pb-5">
          <a href="#">
            <h5 class="text-xl tracking-tight text-slate-900">Lululemon Comfort Tee - White</h5>
          </a>
          <div class="mt-2 mb-5 flex items-center justify-between">
            <p>
              <span class="text-3xl font-bold text-slate-900">$79</span>
              <span class="text-sm text-slate-900 line-through">$99</span>
            </p>
          </div>
          <button class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            Add to cart
          </button>
        </div>
      </div>
      <div class="group my-12 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
        <a class="relative flex h-60 overflow-hidden" href="#">
          <img class="absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80" alt="product image" />
          <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
            <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
            <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div>
            <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div> 
          </div>
          <div class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
            <button class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </a>
        <div class="mt-4 px-5 pb-5">
          <a href="#">
            <h5 class="text-xl tracking-tight text-slate-900">Lululemon Comfort Tee - White</h5>
          </a>
          <div class="mt-2 mb-5 flex items-center justify-between">
            <p>
              <span class="text-3xl font-bold text-slate-900">$79</span>
              <span class="text-sm text-slate-900 line-through">$99</span>
            </p>
          </div>
          <button class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            Add to cart
          </button>
        </div>
      </div>
      <div class="group my-12 flex w-full max-w-xs flex-col overflow-hidden border border-gray-100 bg-white shadow-md">
        <a class="relative flex h-60 overflow-hidden" href="#">
          <img class="absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1072&q=80" alt="product image" />
          <div class="absolute bottom-0 mb-4 flex w-full justify-center space-x-4">
            <div class="h-3 w-3 rounded-full border-2 border-white bg-white"></div>
            <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div>
            <div class="h-3 w-3 rounded-full border-2 border-white bg-transparent"></div> 
          </div>
          <div class="absolute -right-16 bottom-0 mr-2 mb-4 space-y-2 transition-all duration-300 group-hover:right-0">
            <button class="flex h-10 w-10 items-center justify-center bg-gray-900 text-white transition hover:bg-gray-700">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </a>
        <div class="mt-4 px-5 pb-5">
          <a href="#">
            <h5 class="text-xl tracking-tight text-slate-900">Lululemon Comfort Tee - White</h5>
          </a>
          <div class="mt-2 mb-5 flex items-center justify-between">
            <p>
              <span class="text-3xl font-bold text-slate-900">$79</span>
              <span class="text-sm text-slate-900 line-through">$99</span>
            </p>
          </div>
          <button class="flex items-center justify-center bg-gray-900 px-2 py-1 text-sm text-white transition hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
              <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
            Add to cart
          </button>
        </div>
      </div>
    </div>
    <div class="flex justify-center">
      <button class="learn-more">
        <span class="circle" aria-hidden="true">
          <span class="icon arrow"></span>
        </span>
        <span class="button-text">Learn More</span>
      </button>
    </div>

  </section>

  <h2 class="flex flex-row flex-nowrap items-center mt-24">
    <span class="flex-grow block border-t border-black"></span>
    <span class="flex-none block mx-4 px-4 py-2.5 text-xl  leading-none font-medium bg-black text-white">
      START DESIGNING
    </span>
    <span class="flex-grow block border-t border-black"></span>
  </h2>
  <section class="bg-gray-20">
    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
      <div class="flex flex-col lg:flex-row justify-center items-center gap-8">
        <div class="w-full lg:w-5/12 flex flex-col items-center justify-center">
          <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">أول موقع مغربي يمكن من خلاله وضع أي
            تصميم لديك (صورة ,شعار ,رسمة أو مقولة…الخ) على تيشرت ذو جودة عالية وذالك عبر ستديو يتيح لك اختيار نوع و قياس
            و لون التيشرت</p>
          <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">Design at Mochtara is simple.Start
            with a t-shirt/hoodie/sweatshirt/etc. from our broad inventory and quickly personalize itusing our intuitive
            Design Studio.Upload your artwork or your design,and design templates to make your own shirt in no time</p>
          <button
            class="text-base italic md:text-base bg-black text-white py-2  mt-20 hover:bg-zinc-800 rounded-lg w-48 ">Print
            Now اطبع الان</button>
        </div>
        <div class="">
          <img src="https://stylewox.com/swupl/2022/06/LastPrintYourDesign.jpg" alt="A group of People" />
        </div>
      </div>
  </section>

  <footer>
    <div class="bg-gray-100 py-4 text-black-400">
      <div class="container px-4 mx-auto">
        <div class="-mx-4 flex flex-wrap justify-between">
          <div class="px-4 my-4 xl:w-1/5">
            <img src="img/logo2.png" alt="logo" class="w-48">
            <p class="text-lg">
              @2024
            </p>
          </div>

          <div class="px-4 my-4 w-full sm:w-auto">
            <div>
              <h2 class="inline-block text-2xl pb-4 mb-4">Company</h2>
            </div>
            <ul class="leading-8">
              <li><a href="#" class="hover:text-blue-400">Home</a></li>
              <li><a href="#" class="hover:text-blue-400">Shop</a></li>
              <li><a href="#" class="hover:text-blue-400">Design</a></li>
              <li><a href="#" class="hover:text-blue-400">Contact </a></li>
            </ul>
          </div>
          <div class="px-4 my-4 w-full sm:w-auto">
            <div>
              <h2 class="inline-block text-2xl pb-4 mb-4 ">Categories</h2>
            </div>
            <ul class="leading-8">
              <li><a href="#" class="hover:text-blue-400">T-shirts تيشيرت</a></li>
              <li><a href="#" class="hover:text-blue-400">Hoodies هوديي</a></li>
              <li><a href="#" class="hover:text-blue-400">Sweatshirts تيشيرت بالأكمام</a></li>

            </ul>
          </div>
          <div class="px-4 my-4 w-full sm:w-auto xl:w-1/5">
            <div>
              <h2 class="inline-block text-2xl pb-4 mb-4 ">Connect Us</h2>
            </div>
            <a href="#"
              class="inline-flex items-center justify-center h-12 w-12 border border-gray-100 rounded-full mr-1 hover:text-black hover:border-black">
              <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path
                  d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                </path>
              </svg>
            </a>
           
            <a href="#"
              class="inline-flex items-center justify-center h-12 w-12 border border-gray-100 rounded-full mr-1 hover:text-black hover:border-black">
              <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                  d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                </path>
              </svg>
            </a>
            <a href="#"
              class="inline-flex items-center justify-center h-12 w-12 border border-gray-100 rounded-full mr-1 hover:text-black hover:border-black">
              <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                <path
                  d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                </path>
              </svg>
            </a>
            <p class="text-base italic mt-4"><a href="#">kharbouchi@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-gray-200 py-4 text-black-100">
      <div class="container mx-auto px-4">
        <div class="-mx-4 flex flex-wrap justify-between">
          <div class="px-4 w-full text-center sm:w-auto sm:text-left">
            Copyright © 2024
            Mochtara. All Rights Reserved.
          </div>

        </div>
      </div>
    </div>
  </footer>


  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>