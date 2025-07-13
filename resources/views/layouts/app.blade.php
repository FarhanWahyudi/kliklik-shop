<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-poppins">

        @include('partials.navbar')

        @yield('content')

        {{-- Footer --}}
        <footer class="flex justify-center py-5 lg:py-10">
            <div class="w-[95%] md:w-[85%] xl:w-[70%] 2xl:w-[65%]">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('assets/logo/kliklik-shop.png') }}" alt="kliklik-shop" class="w-10">
                    <h2 class="font-semibold text-sm">Kliklik<span class="text-blue-600 font-bold">Shop</span></h2>
                </a>
                <hr class="my-3">
                <div class="flex flex-col gap-5 justify-between sm:flex-row">
                    <div class="flex flex-col gap-5">
                        <div>
                            <p class="text-gray-400 text-sm">Telepon</p>
                            <p class="font-medium">+1 000-000-0000</p>
                        </div>
                        <ul class="flex items-center gap-2">
                            <li>
                                <a href="#">
                                    <svg class="w-5 text-gray-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="w-5 text-gray-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="w-5 text-gray-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="w-5 text-gray-700" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <h6 class="font-semibold mb-3">Company</h6>
                        <ul class="flex flex-col gap-2 text-sm text-gray-500">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <h6 class="font-semibold mb-3">Shop</h6>
                        <ul class="flex flex-col gap-2 text-sm text-gray-500">
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Shop All</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <h6 class="font-semibold mb-3">Help</h6>
                        <ul class="flex flex-col gap-2 text-sm text-gray-500">
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Find a Store</a></li>
                            <li><a href="#">Legal & Privacy</a></li>
                            <li><a href="#">Gift Card</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col">
                        <h6 class="font-semibold mb-3">Categories</h6>
                        <ul class="flex flex-col gap-2 text-sm text-gray-500">
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Shop All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-gray-700 text-sm mt-10">
                    <p>Kliklik Shop © 2025 | Mempermudah keperluan belanja</p>
                </div>
            </div>
        </footer>
    </body>
</html>
