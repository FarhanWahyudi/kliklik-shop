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
            <div class="w-[95%] flex flex-col justify-between items-center gap-2 md:gap-5 md:w-[85%] md:flex-row 2xl:gap-12 xl:w-[70%] 2xl:w-[65%]">
                <div class="flex flex-col items-center gap-1 w-full md:gap-5 2xl:gap-10 md:flex-row">
                    <div class="hidden flex-col items-center md:flex">
                        <img src="{{ asset('assets/logo/kliklik-shop.png') }}" alt="kliklik-shop" class="w-10 hidden md:block">
                        <h2 class="font-semibold text-sm md:-mt-2">Kliklik<span class="text-blue-600 font-bold">Shop</span></h2>
                    </div>
                    <div class="w-full">
                        <form action="" class="relative">
                            @csrf
                            <input type="text" class="w-full text-xs rounded-2xl border border-white bg-gray-100 focus:bg-white py-2 pl-3 focus:border-gray-300 focus:ring-0 md:py-3 md:pl-4 md:text-base">
                            <button type="submit" class="absolute right-5 font-medium top-1/2 -translate-y-1/2 cursor-pointer">
                                <svg class="w-5 text-gray-400 md:w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                </svg>
                            </button>
                        </form> 
                    </div>
                </div>
                <div class="flex gap-3 text-xs lg:gap-6 lg:text-sm xl:text-base 2xl:gap-10">
                    <a href="/" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                        <svg class="w-4 xl:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <h3 class="font-medium">Cart</h3>
                    </a>
                    <a href="/" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
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

        {{-- Banner --}}
        <section class="flex justify-center mt-20 py-5 lg:py-10">
            <div class="w-[95%] flex flex-col justify-between items-center gap-2 md:gap-5 md:w-[85%] md:flex-row 2xl:gap-12 xl:w-[70%] 2xl:w-[65%]">
                <img src="https://p16-images-comn-sg.tokopedia-static.net/tos-alisg-i-zr7vqa5nfb-sg/img/NsjrJu/2020/9/25/b1d2ed1e-ef80-4d7a-869f-a0394f0629be.jpg~tplv-zr7vqa5nfb-image.image" alt="" class="w-full rounded-lg">
            </div>
        </section>

        {{-- Category --}}
        <section class="flex justify-center">
            <div class="w-[95%] p-3 shadow-md rounded-2xl shadow-gray-200 md:w-[85%] sm:p-5 xl:w-[70%] 2xl:w-[65%]">
                <h2 class="text-gray-600 mb-3 font-medium text-sm sm:text-xl sm:mb-5">Kategori Pilihan</h2>
                <div class="flex items-center gap-2 sm:gap-5 scroll-hidden overflow-x-scroll">
                    <div class="flex-shrink-0 flex border border-gray-300 py-1 px-3 rounded-xl items-center lg:gap-1 lg:px-5 lg:py-2 lg:rounded-2xl">
                        <img src="{{ asset('assets/gummy-living-room.svg') }}" alt="" class="w-6 sm:w-7">
                        <h3 class="font-medium text-gray-700 text-xs sm:text-sm lg:text-base">Furniture</h3>
                    </div>
                    <div class="flex-shrink-0 flex border border-gray-300 py-1 px-3 rounded-xl items-center lg:gap-1 lg:px-5 lg:py-2 lg:rounded-2xl">
                        <img src="{{ asset('assets/gummy-living-room.svg') }}" alt="" class="w-6 sm:w-7">
                        <h3 class="font-medium text-gray-700 text-xs sm:text-sm lg:text-base">Furniture</h3>
                    </div>
                    <div class="flex-shrink-0 flex border border-gray-300 py-1 px-3 rounded-xl items-center lg:gap-1 lg:px-5 lg:py-2 lg:rounded-2xl">
                        <img src="{{ asset('assets/gummy-living-room.svg') }}" alt="" class="w-6 sm:w-7">
                        <h3 class="font-medium text-gray-700 text-xs sm:text-sm lg:text-base">Furniture</h3>
                    </div>
                </div>
            </div>
        </section>

        {{-- Product --}}
        <section class="flex justify-center py-5 lg:py-10">
            <div class="w-[95%] p-3 shadow-md rounded-2xl shadow-gray-200 md:w-[85%] sm:p-5 xl:w-[70%] 2xl:w-[65%]">
                <h2 class="text-gray-600 mb-3 font-medium text-sm sm:text-xl sm:mb-5">Produk kami</h2>
                <div class="grid grid-cols-2 gap-x-5 gap-y-10 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                    <div class="flex flex-col justify-between gap-4">
                        <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="rounded-md w-full">
                        <div class="flex flex-col gap-1">
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <footer class="flex justify-center py-5 lg:py-10">
            <div class="border-t border-gray-200 w-[95%] md:w-[85%] xl:w-[70%] 2xl:w-[65%]">
                <div class="flex justify-between">
                    <div class="footer-column footer-store-info col-12 mb-4 mb-lg-0">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo.png" alt="SurfsideMedia" class="logo__image d-block" />
                            </a>
                        </div>
                        <p class="footer-address">123 Beach Avenue, Surfside City, CA 00000</p>
                        <p class="m-0"><strong class="fw-medium">contact@surfsidemedia.in</strong></p>
                        <p><strong class="fw-medium">+1 000-000-0000</strong></p>

                        <ul class="social-links list-unstyled d-flex flex-wrap mb-0">
                            <li>
                            <a href="#" class="footer__social-link d-block">
                                <svg class="svg-icon svg-icon_facebook" width="9" height="15" viewBox="0 0 9 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_facebook" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#" class="footer__social-link d-block">
                                <svg class="svg-icon svg-icon_twitter" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_twitter" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#" class="footer__social-link d-block">
                                <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_instagram" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#" class="footer__social-link d-block">
                                <svg class="svg-icon svg-icon_youtube" width="16" height="11" viewBox="0 0 16 11"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.0117 1.8584C14.8477 1.20215 14.3281 0.682617 13.6992 0.518555C12.5234 0.19043 7.875 0.19043 7.875 0.19043C7.875 0.19043 3.19922 0.19043 2.02344 0.518555C1.39453 0.682617 0.875 1.20215 0.710938 1.8584C0.382812 3.00684 0.382812 5.46777 0.382812 5.46777C0.382812 5.46777 0.382812 7.90137 0.710938 9.07715C0.875 9.7334 1.39453 10.2256 2.02344 10.3896C3.19922 10.6904 7.875 10.6904 7.875 10.6904C7.875 10.6904 12.5234 10.6904 13.6992 10.3896C14.3281 10.2256 14.8477 9.7334 15.0117 9.07715C15.3398 7.90137 15.3398 5.46777 15.3398 5.46777C15.3398 5.46777 15.3398 3.00684 15.0117 1.8584ZM6.34375 7.68262V3.25293L10.2266 5.46777L6.34375 7.68262Z" />
                                </svg>
                            </a>
                            </li>
                            <li>
                            <a href="#" class="footer__social-link d-block">
                                <svg class="svg-icon svg-icon_pinterest" width="14" height="15" viewBox="0 0 14 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <use href="#icon_pinterest" />
                                </svg>
                            </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-column footer-menu mb-4 mb-lg-0">
                        <h6 class="sub-menu__title text-uppercase">Company</h6>
                        <ul class="sub-menu__list list-unstyled">
                            <li class="sub-menu__item"><a href="about-2.html" class="menu-link menu-link_us-s">About Us</a></li>
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Careers</a></li>
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Affiliates</a></li>
                            <li class="sub-menu__item"><a href="blog_list1.html" class="menu-link menu-link_us-s">Blog</a></li>
                            <li class="sub-menu__item"><a href="contact-2.html" class="menu-link menu-link_us-s">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="footer-column footer-menu mb-4 mb-lg-0">
                        <h6 class="sub-menu__title text-uppercase">Shop</h6>
                        <ul class="sub-menu__list list-unstyled">
                            <li class="sub-menu__item"><a href="shop2.html" class="menu-link menu-link_us-s">New Arrivals</a></li>
                            <li class="sub-menu__item"><a href="shop3.html" class="menu-link menu-link_us-s">Accessories</a></li>
                            <li class="sub-menu__item"><a href="shop4.html" class="menu-link menu-link_us-s">Men</a></li>
                            <li class="sub-menu__item"><a href="shop5.html" class="menu-link menu-link_us-s">Women</a></li>
                            <li class="sub-menu__item"><a href="shop1.html" class="menu-link menu-link_us-s">Shop All</a></li>
                        </ul>
                    </div>

                    <div class="footer-column footer-menu mb-4 mb-lg-0">
                        <h6 class="sub-menu__title text-uppercase">Help</h6>
                        <ul class="sub-menu__list list-unstyled">
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Customer Service</a></li>
                            <li class="sub-menu__item"><a href="account_dashboard.html" class="menu-link menu-link_us-s">My Account</a>
                            </li>
                            <li class="sub-menu__item"><a href="store_location.html" class="menu-link menu-link_us-s">Find a Store</a>
                            </li>
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Legal & Privacy</a></li>
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Gift Card</a></li>
                        </ul>
                    </div>

                    <div class="footer-column footer-menu mb-4 mb-lg-0">
                        <h6 class="sub-menu__title text-uppercase">Categories</h6>
                        <ul class="sub-menu__list list-unstyled">
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Shirts</a></li>
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Jeans</a></li>
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Shoes</a></li>
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Bags</a></li>
                            <li class="sub-menu__item"><a href="#" class="menu-link menu-link_us-s">Shop All</a></li>
                        </ul>
                    </div>
                </div>
    
                <div class="footer-bottom">
                    <div class="container d-md-flex align-items-center">
                        <span class="footer-copyright me-auto">©2024 Surfside Media</span>
                        <div class="footer-settings d-md-flex align-items-center">
                            <a href="privacy-policy.html">Privacy Policy</a> &nbsp;|&nbsp; <a href="terms-conditions.html">Terms &amp;
                            Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>