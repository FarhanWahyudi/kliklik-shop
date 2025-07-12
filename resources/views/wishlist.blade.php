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

        {{-- Navbar --}}
        <nav class="fixed top-0 left-0 w-full bg-white flex justify-center py-3 border-b border-gray-200 md:py-5">
            <div class="w-[95%] flex justify-between items-center gap-2 md:gap-5 md:w-[85%] 2xl:gap-12 xl:w-[70%] 2xl:w-[65%]">
                <div class="flex flex-row items-center gap-1 w-full md:gap-5 2xl:gap-10">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/logo/kliklik-shop.png') }}" alt="kliklik-shop" class="w-10">
                        <h2 class="hidden font-semibold text-sm -mt-2 md:block">Kliklik<span class="text-blue-600 font-bold">Shop</span></h2>
                    </div>
                    <div class="w-full">
                        <form action="" class="relative flex items-center gap-2 sm:gap-0">
                            @csrf
                            <input type="text" class="w-full text-xs rounded-2xl border border-white bg-gray-100 focus:bg-white py-2 pl-3 focus:border-gray-300 focus:ring-0 md:py-3 md:pl-4 md:text-base" placeholder="Cari di Kliklik Shop">
                            <button type="submit" class="hidden absolute right-5 font-medium top-1/2 -translate-y-1/2 cursor-pointer sm:block">
                                <svg class="w-5 text-gray-400 md:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                            <button type="submit" class="font-medium cursor-pointer bg-blue-600 rounded-full p-2.5 sm:hidden">
                                <svg class="w-3 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                            </button>
                        </form> 
                    </div>
                </div>
                <div class="hidden gap-3 text-xs sm:flex lg:gap-6 lg:text-sm xl:text-base 2xl:gap-10">
                    <a href="/" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                        <svg class="w-4 xl:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <h3 class="font-medium">Cart</h3>
                    </a>
                    <a href="/wishlist" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                        <svg class="w-4 xl:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                        </svg>
                        <h3 class="font-medium">Wishlist</h3>
                    </a>
                    <div class="flex gap-2 items-center">
                        <a href="/" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                            <svg class="w-4 xl:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <h3 class="font-medium">Login</h3>
                        </a>
                        |
                        <a href="/" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                            <h3 class="font-medium">Daftar</h3>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Mobile Navbar --}}
        <nav class="fixed bottom-0 left-0 w-full flex justify-center bg-white sm:hidden">
            <div class="flex justify-between pb-2 pt-3 w-[92%]">
                <div class="flex flex-col justify-between items-center text-blue-500">
                    <svg class="w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                    <p class="text-xs">Beranda</p>
                </div>
                <div class="flex flex-col justify-between items-center text-gray-500">
                    <svg class="w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                    <p class="text-xs">Disukai</p>
                </div>
                <div class="flex flex-col justify-between items-center text-gray-500">
                    <svg class="w-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0L69.5 0c22 0 41.5 12.8 50.6 32l411 0c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3l-288.5 0 5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5L488 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-288.3 0c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5L24 48C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                    <p class="text-xs">Keranjang</p>
                </div>
                <div class="flex flex-col justify-between items-center text-gray-500">
                    <svg class="w-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M64 0C28.7 0 0 28.7 0 64L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-288-128 0c-17.7 0-32-14.3-32-32L224 0 64 0zM256 0l0 128 128 0L256 0zM80 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L80 96c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64l64 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zm54.2 253.8c-6.1 20.3-24.8 34.2-46 34.2L80 416c-8.8 0-16-7.2-16-16s7.2-16 16-16l8.2 0c7.1 0 13.3-4.6 15.3-11.4l14.9-49.5c3.4-11.3 13.8-19.1 25.6-19.1s22.2 7.7 25.6 19.1l11.6 38.6c7.4-6.2 16.8-9.7 26.8-9.7c15.9 0 30.4 9 37.5 23.2l4.4 8.8 54.1 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-64 0c-6.1 0-11.6-3.4-14.3-8.8l-8.8-17.7c-1.7-3.4-5.1-5.5-8.8-5.5s-7.2 2.1-8.8 5.5l-8.8 17.7c-2.9 5.9-9.2 9.4-15.7 8.8s-12.1-5.1-13.9-11.3L144 349l-9.8 32.8z"/></svg>
                    <p class="text-xs">Pesanan</p>
                </div>
                <div class="flex flex-col justify-between items-center text-gray-500">
                    <svg class="w-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/></svg>
                    <p class="text-xs">Akun</p>
                </div>
            </div>
        </nav>

        {{-- Wishlist --}}
        <div class="flex justify-center py-5 lg:py-10 mt-14 md:mt-20">
            <div class="w-[95%] px-3 pb-10 pt-3 rounded-2xl shadow-md shadow-gray-200 md:w-[85%] sm:px-5 sm:pt-5 xl:w-[70%] 2xl:w-[65%]">
                <h2 class="mb-5 font-semibold text-2xl">Semua Wishlist</h2>
                <div class="grid grid-cols-2 gap-x-3 gap-y-5 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                    <a href="/detail-product" class="flex flex-col shadow-lg shadow-gray-100 border border-gray-200 rounded-lg">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1 p-3">
                            <h2 class="line-clamp-2 text-sm lg:line-clamp-none lg:truncate">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                            <h2 class="font-semibold">Rp145.000</h2>
                            <div class="flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                                <div class="flex items-center gap-1">
                                    <svg class="w-3 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <span>4.7</span>
                                </div>
                                <span>•</span>
                                <span>60+ terjual</span>
                            </div>
                            <button class="text-blue-600 text-sm border border-blue-600 py-1.5 rounded-lg font-medium mt-3">+ Keranjang</button>
                        </div>
                    </a>
                    <a href="/detail-product" class="flex flex-col shadow-lg shadow-gray-100 border border-gray-200 rounded-lg">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1 p-3">
                            <h2 class="line-clamp-2 text-sm lg:line-clamp-none lg:truncate">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                            <h2 class="font-semibold">Rp145.000</h2>
                            <div class="flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                                <div class="flex items-center gap-1">
                                    <svg class="w-3 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <span>4.7</span>
                                </div>
                                <span>•</span>
                                <span>60+ terjual</span>
                            </div>
                            <button class="text-blue-600 text-sm border border-blue-600 py-1.5 rounded-lg font-medium mt-3">+ Keranjang</button>
                        </div>
                    </a>
                    <a href="/detail-product" class="flex flex-col shadow-lg shadow-gray-100 border border-gray-200 rounded-lg">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1 p-3">
                            <h2 class="line-clamp-2 text-sm lg:line-clamp-none lg:truncate">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                            <h2 class="font-semibold">Rp145.000</h2>
                            <div class="flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                                <div class="flex items-center gap-1">
                                    <svg class="w-3 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <span>4.7</span>
                                </div>
                                <span>•</span>
                                <span>60+ terjual</span>
                            </div>
                            <button class="text-blue-600 text-sm border border-blue-600 py-1.5 rounded-lg font-medium mt-3">+ Keranjang</button>
                        </div>
                    </a>
                    <a href="/detail-product" class="flex flex-col shadow-lg shadow-gray-100 border border-gray-200 rounded-lg">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1 p-3">
                            <h2 class="line-clamp-2 text-sm lg:line-clamp-none lg:truncate">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                            <h2 class="font-semibold">Rp145.000</h2>
                            <div class="flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                                <div class="flex items-center gap-1">
                                    <svg class="w-3 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <span>4.7</span>
                                </div>
                                <span>•</span>
                                <span>60+ terjual</span>
                            </div>
                            <button class="text-blue-600 text-sm border border-blue-600 py-1.5 rounded-lg font-medium mt-3">+ Keranjang</button>
                        </div>
                    </a>
                    <a href="/detail-product" class="flex flex-col shadow-lg shadow-gray-100 border border-gray-200 rounded-lg">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1 p-3">
                            <h2 class="line-clamp-2 text-sm lg:line-clamp-none lg:truncate">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                            <h2 class="font-semibold">Rp145.000</h2>
                            <div class="flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                                <div class="flex items-center gap-1">
                                    <svg class="w-3 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <span>4.7</span>
                                </div>
                                <span>•</span>
                                <span>60+ terjual</span>
                            </div>
                            <button class="text-blue-600 text-sm border border-blue-600 py-1.5 rounded-lg font-medium mt-3">+ Keranjang</button>
                        </div>
                    </a>
                    <a href="/detail-product" class="flex flex-col shadow-lg shadow-gray-100 border border-gray-200 rounded-lg">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1 p-3">
                            <h2 class="line-clamp-2 text-sm lg:line-clamp-none lg:truncate">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                            <h2 class="font-semibold">Rp145.000</h2>
                            <div class="flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                                <div class="flex items-center gap-1">
                                    <svg class="w-3 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <span>4.7</span>
                                </div>
                                <span>•</span>
                                <span>60+ terjual</span>
                            </div>
                            <button class="text-blue-600 text-sm border border-blue-600 py-1.5 rounded-lg font-medium mt-3">+ Keranjang</button>
                        </div>
                    </a>
                    <a href="/detail-product" class="flex flex-col shadow-lg shadow-gray-100 border border-gray-200 rounded-lg">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1 p-3">
                            <h2 class="line-clamp-2 text-sm lg:line-clamp-none lg:truncate">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                            <h2 class="font-semibold">Rp145.000</h2>
                            <div class="flex items-center gap-1 text-gray-500 text-xs sm:text-sm">
                                <div class="flex items-center gap-1">
                                    <svg class="w-3 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <span>4.7</span>
                                </div>
                                <span>•</span>
                                <span>60+ terjual</span>
                            </div>
                            <button class="text-blue-600 text-sm border border-blue-600 py-1.5 rounded-lg font-medium mt-3">+ Keranjang</button>
                        </div>
                    </a>
                    
                </div>
            </div>
        </div>

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