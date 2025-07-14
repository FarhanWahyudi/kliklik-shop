<nav class="fixed top-0 left-0 w-full bg-white flex justify-center py-3 border-b border-gray-200 md:py-5" z-10>
    <div class="w-[95%] flex justify-between items-center gap-2 md:gap-5 md:w-[85%] 2xl:gap-12 xl:w-[70%] 2xl:w-[65%]">
        <div class="flex flex-row items-center gap-1 w-full md:gap-5 2xl:gap-10">
            <a href="/" class="flex flex-col items-center">
                <img src="{{ asset('assets/logo/kliklik-shop.png') }}" alt="kliklik-shop" class="w-10">
                <h2 class="hidden font-semibold text-sm -mt-2 md:block">Kliklik<span class="text-blue-600 font-bold">Shop</span></h2>
            </a>
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
        <div class="hidden gap-3 text-xs sm:flex lg:gap-6 lg:text-sm xl:text-base">
            <a href="/cart" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                <svg class="w-4 xl:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
                <h3 class="hidden font-medium lg:block">Cart</h3>
            </a>
            <a href="/wishlist" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                <svg class="w-4 xl:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
                <h3 class="hidden font-medium lg:block">Wishlist</h3>
            </a>
            <a href="/transaction" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                <svg class="w-4 xl:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25M9 16.5v.75m3-3v3M15 12v5.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
                <h3 class="hidden font-medium lg:block">Pesanan</h3>
            </a>
            <div class="flex gap-2 items-center">
                <a href="/login" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                    <svg class="w-4 xl:w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>
                    <h3 class="font-medium">Login</h3>
                </a>
                |
                <a href="/register" class="flex items-center gap-1 hover:text-gray-500 transition-all duration-300">
                    <h3 class="font-medium">Daftar</h3>
                </a>
            </div>
        </div>
    </div>
</nav>