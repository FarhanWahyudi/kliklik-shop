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
        <nav class="flex justify-center py-5 border-b border-gray-200">
            <div class="w-[95%] flex flex-col justify-between items-center gap-2 md:gap-5 md:w-[85%] md:flex-row 2xl:gap-12 xl:w-[70%] 2xl:w-[65%]">
                <div class="flex flex-col items-center gap-1 w-full md:gap-5 2xl:gap-10 md:flex-row">
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/logo/kliklik-shop.png') }}" alt="kliklik-shop" class="w-10 hidden md:block">
                        <h2 class="font-semibold text-sm md:-mt-2">Kliklik<span class="text-blue-600 font-bold">Shop</span></h2>
                    </div>
                    <div class="w-full">
                        <form action="" class="relative">
                            @csrf
                            <input type="text" class="w-full rounded-2xl border border-white bg-gray-100 focus:bg-white py-3 pl-4 focus:border-gray-300 focus:ring-0">
                            <button type="submit" class="absolute right-5 font-medium top-1/2 -translate-y-1/2 cursor-pointer">
                                <svg class="size-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
        <section class="flex justify-center py-5 lg:py-10">
            <div class="w-[95%] flex flex-col justify-between items-center gap-2 md:gap-5 md:w-[85%] md:flex-row 2xl:gap-12 xl:w-[70%] 2xl:w-[65%]">
                <img src="https://p16-images-comn-sg.tokopedia-static.net/tos-alisg-i-zr7vqa5nfb-sg/img/NsjrJu/2020/9/25/b1d2ed1e-ef80-4d7a-869f-a0394f0629be.jpg~tplv-zr7vqa5nfb-image.image" alt="" class="w-full rounded-lg">
            </div>
        </section>

        {{-- Category --}}
        <section class="flex justify-center">
            <div class="w-[95%] p-3 shadow-md rounded-2xl shadow-gray-200 md:w-[85%] sm:p-5 xl:w-[70%] 2xl:w-[65%]">
                <div class="flex items-center gap-2 md:gap-5 scroll-hidden overflow-x-scroll">
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
    </body>
</html>