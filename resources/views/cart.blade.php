@extends('layouts.app')

@section('content')

    {{-- ---- --}}
    <nav class="fixed bottom-0 left-0 w-full flex justify-center p-2 border-t border-gray-300 bg-white sm:hidden">
        <div class="flex justify-between gap-1 w-full text-sm">
            <div>
                <h4 class="text-gray-600 text-xs">Total</h4>
                <span class="font-semibold">Rp1.200.000</span>
            </div>
            <button class="bg-blue-600 text-white rounded-md font-medium px-10">Beli <span class="text-xs">(3)</span></button>
        </div>
    </nav>
    
    {{-- Cart --}}
    <div class="flex justify-center min-h-screen py-5 lg:py-10 mt-14 md:mt-20">
        <div class="w-[95%] md:w-[85%] xl:w-[70%] 2xl:w-[65%]">
            <div class="grid grid-cols-7 gap-5">
                <div class="col-span-full px-3 pb-10 pt-3 rounded-2xl shadow-md shadow-gray-200 sm:px-5 sm:pt-5 lg:col-span-5">
                    <h1 class="mb-5 font-semibold text-xl md:text-2xl">Keranjang</h1>
                    <form action="">
                        <div class="flex items-center gap-3">
                            <input type="checkbox" id="select-all" class="focus:ring-0 w-4 h-4 rounded-md md:w-5 md:h-5">
                            <label for="select-all" class="font-medium text-sm md:text-base">Pilih Semua <span class="text-gray-500 text-xs font-normal md:text-sm">(3)</span></label>
                        </div>
                        <div>
                            <hr class="border-t border-gray-200 my-5">
                            <div class="flex flex-col justify-between md:flex-row">
                                <div class="flex items-start gap-2 md:gap-3">
                                    <input type="checkbox" class="focus:ring-0 w-4 h-4 rounded-md md:w-5 md:h-5">
                                    <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="w-16 rounded-md border border-gray-200 sm:w-20">
                                    <h2 class="line-clamp-2 text-sm md:text-base">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                                </div>
                                <div class="flex flex-row justify-end gap-2 items-center md:items-end md:flex-col md:justify-between md:gap-0">
                                    <span class="font-semibold text-sm sm:text-base">Rp600.000</span>
                                    <div class="flex items-center gap-2">
                                        <svg class="text-gray-400 w-3 sm:w-4 md:w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z"/></svg>
                                        <div class="relative w-20 md:w-24 -z-10"> 
                                            <button class="absolute top-1/2 -translate-y-1/2 left-3 text-base md:text-lg">-</button>
                                            <input type="number" class="text-sm rounded-full border border-gray-400 text-center no-spinner w-full py-0.5 md:text-base" value="1" min="1">
                                            <button class="absolute top-1/2 -translate-y-1/2 right-3 text-base md:text-lg">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="border-t border-gray-200 my-5">
                            <div class="flex flex-col justify-between md:flex-row">
                                <div class="flex items-start gap-2 md:gap-3">
                                    <input type="checkbox" class="focus:ring-0 w-4 h-4 rounded-md md:w-5 md:h-5">
                                    <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="w-16 rounded-md border border-gray-200 sm:w-20">
                                    <h2 class="line-clamp-2 text-sm md:text-base">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                                </div>
                                <div class="flex flex-row justify-end gap-2 items-center md:items-end md:flex-col md:justify-between md:gap-0">
                                    <span class="font-semibold text-sm sm:text-base">Rp600.000</span>
                                    <div class="flex items-center gap-2">
                                        <svg class="text-gray-400 w-3 sm:w-4 md:w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z"/></svg>
                                        <div class="relative w-20 md:w-24 -z-10"> 
                                            <button class="absolute top-1/2 -translate-y-1/2 left-3 text-base md:text-lg">-</button>
                                            <input type="number" class="text-sm rounded-full border border-gray-400 text-center no-spinner w-full py-0.5 md:text-base" value="1" min="1">
                                            <button class="absolute top-1/2 -translate-y-1/2 right-3 text-base md:text-lg">+</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
                <div class="col-span-full relative lg:col-span-2 -z-10">
                    <div class="static hidden p-5 rounded-2xl shadow-md shadow-gray-200 sm:block lg:sticky lg:top-28 lg:left-0">
                        <h3 class="font-semibold text-lg">Ringkasan Belanja</h3>
                        <div class="flex items-center justify-between mt-3">
                            <h4 class="text-gray-600">Total</h4>
                            <span class="font-semibold">Rp1.200.000</span>
                        </div>
                        <hr class="border-t border-gray-200 my-5">
                        <button class="w-full bg-blue-600 text-white py-2 rounded-lg font-medium">Beli</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection