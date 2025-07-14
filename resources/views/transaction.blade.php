@extends('layouts.app')

@section('content')

    @include('partials.navbar-mobile')

    {{-- Transaction --}}
    <div class="flex justify-center min-h-screen py-5 lg:py-10 mt-14 md:mt-20">
        <div class="w-[95%] md:w-[85%] xl:w-[70%] 2xl:w-[65%]">
            <div class="px-3 pb-10 pt-3 rounded-2xl shadow-md shadow-gray-200 sm:px-5 sm:pt-5">
                <h1 class="mb-5 font-semibold text-xl md:text-2xl">Daftar Transaksi</h1>
                <div class="flex flex-col items-start gap-2 md:gap-3 md:flex-row md:items-center">
                    <h2 class="font-semibold text-sm">Status</h2>
                    <div class="flex items-center flex-wrap gap-x-1.5 gap-y-2 md:gap-x-3">
                        <button class="text-xs px-2 py-1 border border-blue-600 text-blue-600 bg-blue-100 rounded-lg md:text-sm md:px-3 md:py-2 md:rounded-xl">Semua</button>
                        <button class="text-xs px-2 py-1 border border-gray-400 text-gray-600 rounded-lg md:text-sm md:px-3 md:py-2 md:rounded-xl">Dikemas</button>
                        <button class="text-xs px-2 py-1 border border-gray-400 text-gray-600 rounded-lg md:text-sm md:px-3 md:py-2 md:rounded-xl">Dikirim</button>
                        <button class="text-xs px-2 py-1 border border-gray-400 text-gray-600 rounded-lg md:text-sm md:px-3 md:py-2 md:rounded-xl">Selesai</button>
                    </div>
                </div>
                <div>
                    <hr class="border-t border-gray-200 my-5">
                    <div class="flex flex-col gap-3">
                        <div class="flex gap-2 items-center">
                            <h2 class="text-xs bg-blue-200 font-semibold text-blue-600 px-1 py-0.5 rounded-sm">Dikirim</h2>
                            <span class="text-sm text-gray-600">13 Juli 2025</span>
                        </div>
                        <div class="flex justify-between gap-5">
                            <div class="flex items-start gap-2 md:gap-3">
                                <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="w-16 rounded-md border border-gray-200 sm:w-20">
                                <div>
                                    <h2 class="line-clamp-2 text-sm sm:text-base">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                                    <span class="text-gray-600 text-xs sm:text-sm">1 Barang x Rp600.000</span>
                                </div>
                            </div>
                            <div class="hidden flex-shrink-0 flex-col md:flex">
                                <span class="text-gray-500 text-xs sm:text-sm">Total Belanja</span>
                                <span class="font-semibold text-sm sm:text-base">Rp600.000</span>
                            </div>
                        </div>
                        <div class="flex justify-end items-center md:justify-end">
                            <div class="flex flex-shrink-0 flex-col md:hidden">
                                <span class="text-gray-500 text-xs sm:text-sm">Total Belanja</span>
                                <span class="font-semibold text-sm sm:text-base">Rp600.000</span>
                            </div>
                        </div>
                    </div>
                    <hr class="border-t border-gray-200 my-5">
                    <div class="flex flex-col gap-3">
                        <div class="flex gap-2 items-center">
                            <h2 class="text-xs bg-yellow-200 font-semibold text-yellow-600 px-1 py-0.5 rounded-sm">Dikemas</h2>
                            <span class="text-sm text-gray-600">13 Juli 2025</span>
                        </div>
                        <div class="flex justify-between gap-5">
                            <div class="flex items-start gap-2 md:gap-3">
                                <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="w-16 rounded-md border border-gray-200 sm:w-20">
                                <div>
                                    <h2 class="line-clamp-2 text-sm sm:text-base">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                                    <span class="text-gray-600 text-xs sm:text-sm">1 Barang x Rp600.000</span>
                                </div>
                            </div>
                            <div class="hidden flex-shrink-0 flex-col md:flex">
                                <span class="text-gray-500 text-xs sm:text-sm">Total Belanja</span>
                                <span class="font-semibold text-sm sm:text-base">Rp600.000</span>
                            </div>
                        </div>
                        <div class="flex justify-end items-center md:justify-end">
                            <div class="flex flex-shrink-0 flex-col md:hidden">
                                <span class="text-gray-500 text-xs sm:text-sm">Total Belanja</span>
                                <span class="font-semibold text-sm sm:text-base">Rp600.000</span>
                            </div>
                        </div>
                    </div>
                    <hr class="border-t border-gray-200 my-5">
                    <div class="flex flex-col gap-3">
                        <div class="flex gap-2 items-center">
                            <h2 class="text-xs bg-green-200 font-semibold text-green-600 px-1 py-0.5 rounded-sm">Selesai</h2>
                            <span class="text-sm text-gray-600">13 Juli 2025</span>
                        </div>
                        <div class="flex justify-between gap-5">
                            <div class="flex items-start gap-2 md:gap-3">
                                <img src="https://images.tokopedia.net/img/cache/200-square/aphluv/1997/1/1/e03929d12aa645ab9c831987a47bdf77~.jpeg.webp?ect=4g" alt="" class="w-16 rounded-md border border-gray-200 sm:w-20">
                                <div>
                                    <h2 class="line-clamp-2 text-sm sm:text-base">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h2>
                                    <span class="text-gray-600 text-xs sm:text-sm">1 Barang x Rp600.000</span>
                                </div>
                            </div>
                            <div class="hidden flex-shrink-0 flex-col md:flex">
                                <span class="text-gray-500 text-xs sm:text-sm">Total Belanja</span>
                                <span class="font-semibold text-sm sm:text-base">Rp600.000</span>
                            </div>
                        </div>
                        <div class="flex justify-between items-center md:justify-end">
                            <div class="flex flex-shrink-0 flex-col md:hidden">
                                <span class="text-gray-500 text-xs sm:text-sm">Total Belanja</span>
                                <span class="font-semibold text-sm sm:text-base">Rp600.000</span>
                            </div>
                            <div class="flex gap-2 md:gap-3">
                                <button class="border border-blue-600 text-xs text-blue-600 py-1.5 px-5 rounded-md font-medium sm:text-sm sm:px-10 sm:rounded-lg">Nilai</button>
                                <button class="bg-blue-600 text-xs text-white py-1.5 px-5 rounded-md font-medium sm:text-sm sm:px-10 sm:rounded-lg">Beli Lagi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection