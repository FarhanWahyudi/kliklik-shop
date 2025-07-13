@extends('layouts.app')

@section('content')

    @include('partials.navbar-mobile')

    {{-- Wishlist --}}
    <div class="flex justify-center min-h-screen py-5 lg:py-10 mt-14 md:mt-20">
        <div class="w-[95%] px-3 pb-10 pt-3 rounded-2xl shadow-md shadow-gray-200 md:w-[85%] sm:px-5 sm:pt-5 xl:w-[70%] 2xl:w-[65%]">
            <h1 class="mb-5 font-semibold text-2xl">Semua Wishlist</h1>
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

@endsection