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
        <nav class="fixed top-0 left-0 w-full bg-white flex justify-center py-3  border-b border-gray-200 md:py-5 z-10">
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

        {{-- Sticky Footer Bar --}}
        <nav class="fixed bottom-0 left-0 w-full flex justify-center p-2 bg-white sm:hidden">
            <div class="flex gap-1 w-full text-sm">
                <button class="w-full bg-blue-600 text-white py-2 rounded-md font-medium">+ Keranjang</button>
                <button class="w-full border border-blue-600 text-blue-600 py-2 rounded-md font-medium">Beli Langsung</button>
            </div>
        </nav>

        {{-- Detail --}}
        <div class="flex justify-center mt-20 md:mt-28 lg:mt-32">
            <div class="w-[95%] md:w-[85%] xl:w-[70%] 2xl:w-[65%]">
                <div class="grid grid-cols-9 gap-8">
                    <div class="relative col-span-full md:col-span-4 lg:col-span-3">
                        <img src="https://images.tokopedia.net/img/cache/900/aphluv/1997/1/1/187abf79bae3472f9fd8a3f8032114c4~.jpeg" alt="" class="sticky top-28 left-0 w-full rounded-lg">
                    </div>
                    <div class="col-span-full md:col-span-5 lg:col-span-4">
                        <div>
                            <h1 class="text-xl font-semibold">Atori CY3220 Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis - FULL WHITE</h1>
                            <div class="flex items-center gap-1 mt-1 text-sm">
                                <p class="text-gray-500"><span class="font-medium text-black">Terjual</span> 60+</p>
                                <span>•</span>
                                <div class="flex items-center gap-1">
                                    <svg class="w-3 sm:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                    <p class="text-gray-500"><span class="font-medium text-black">4.7</span> (12 rating)</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <h2 class="text-3xl font-semibold mt-3">Rp145.000</h2>
                                <svg class="text-gray-400 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                </svg>
                            </div>
                            <hr class="border-t border-gray-200 mt-5">
                            <div>
                                <h5 class="inline-block text-blue-600 border-b-2 border-blue-600 py-2 font-semibold px-5 mb-3">Detail</h5>
                                <p class="text-sm lg:text-base">
                                    📍𝐁𝐀𝐂𝐀 𝐃𝐄𝐒𝐊𝐑𝐈𝐏𝐒𝐈 𝐓𝐄𝐍𝐓𝐀𝐍𝐆 𝐏𝐑𝐎𝐃𝐔𝐊 𝐝𝐚𝐧 𝐓𝐎𝐊𝐎📍<br/>
                                    *𝘜𝘕𝘛𝘜𝘒 𝘞𝘈𝘙𝘕𝘈 𝘗𝘙𝘖𝘋𝘜𝘒 𝘉𝘐𝘚𝘈 𝘓𝘌𝘉𝘐𝘏 𝘛𝘌𝘙𝘈𝘕𝘎 𝘔𝘈𝘜𝘗𝘜𝘕 𝘓𝘌𝘉𝘐𝘏 𝘎𝘌𝘓𝘈𝘗 𝘒𝘈𝘙𝘌𝘕𝘈 𝘌𝘍𝘌𝘒 𝘊𝘈𝘏𝘈𝘠𝘈<br/>
                                    <br/>
                                    Kursi Lipat Portable Empuk Kursi Belajar Kursi Cafe Minimalis<br/>
                                    <br/>
                                    🌹𝗧𝗲𝗻𝘁𝗮𝗻𝗴 𝗣𝗿𝗼𝗱𝘂𝗸🌹<br/>
                                    ✔ Kulit PU Berkualitas Tinggi<br/>
                                    ✔ Praktis dan mudah digunakan<br/>
                                    ✔ Stabil dan nyaman pada saat bersamaan<br/>
                                    ✔ Mudah disimpan dan menghemat space ruangan karena tipe kursi yang dilipat<br/>
                                    ✔ Produk Knockdown Self Assembly, Customer Merakit Sendiri<br/>
                                    ✔ Harga Promo Terbaik<br/>
                                    ✔ Pengiriman se Indonesia<br/>
                                    <br/>
                                    🌹𝗞𝗘𝗕𝗜𝗝𝗔𝗞𝗔𝗡 𝗧𝗢𝗞𝗢🌹<br/>
                                    🌸 Sangat diSARANKAN untuk memilih jasa kirim 𝐆𝐎𝐉𝐄𝐊 ya bestieku, lebih cepat sampai, Tidak LECET / RUSAK, STRESS FREE banget<br/>
                                    🌸 Untuk Pengiriman dengan kurir 𝐂𝐀𝐑𝐆𝐎 / 𝐉𝐍𝐄 kami SARANKAN untuk menambah 𝙀𝙓𝙏𝙍𝘼 𝘽𝙐𝘽𝘽𝙇𝙀 𝙒𝙍𝘼𝙋 ya agar terhindar dari kerusakan / lecet pada produk<br/>
                                    🌸 Kerusakan yang di sebabkan oleh Jasa Kirim BUKAN tanggung jawab Penjual ya Bestie, Harap 𝙆𝙇𝘼𝙄𝙈 ke Kurir Cargo / JNE nya<br/>
                                    🌸 Kami sarankan untuk 𝗦𝗘𝗟𝗔𝗟𝗨 membeli 𝗔𝗦𝗨𝗥𝗔𝗡𝗦𝗜 Pengiriman ya Bestie<br/>
                                    🌸 Jika 𝗞𝗢𝗠𝗣𝗟𝗔𝗜𝗡 harap terterakan 𝗩𝗜𝗗𝗘𝗢 𝗨𝗡𝗕𝗢𝗫𝗜𝗡𝗚 𝗦𝗘𝗖𝗔𝗥𝗔 𝗙𝗨𝗟𝗟 𝗧𝗔𝗡𝗣𝗔 𝗧𝗘𝗥𝗣𝗢𝗧𝗢𝗡𝗚<br/>
                                    📍Produk ini di Jual TANPA PERAKITAN. Untuk customer Anti Ribet, Silahkan order jasa perakitan kami.<br/>
                                    (Estimasi perakitan selambatnya 3-5 hari, bisa lebih cepat tergantung rute lokasi kamu)<br/>
                                    📍Kami akan selalu hadir untuk kamu, silahkan chat kami apabila terdapat kendala kekurangan Baut atau Lainnya<br/>
                                    🌷[𝗥𝗲𝘀𝗽𝗼𝗻 𝗖𝗛𝗔𝗧 𝗺𝘂𝗹𝗮𝗶 𝗱𝗮𝗿𝗶 𝗽𝘂𝗸𝘂𝗹 𝟬𝟴.𝟬𝟬-𝟮𝟭.𝟬𝟬 𝗱𝗶𝗵𝗮𝗿𝗶 𝗦𝗲𝗻𝗶𝗻 - 𝗦𝗮𝗯𝘁𝘂 𝘆𝗮 (𝗛𝗮𝗿𝗶 𝗠𝗶𝗻𝗴𝗴𝘂 𝗛𝗮𝗿𝗶 𝗜𝘀𝘁𝗶𝗿𝗮𝗵𝗮𝘁^^)]🌷<br/>
                                    📍Sebelum melakukan pengiriman pesanan kamu, sudah di cek terlebih dahulu oleh 𝗧𝗶𝗺 𝗤𝗖 𝗤𝘂𝗮𝗹𝗶𝘁𝘆 𝗖𝗼𝗻𝘁𝗿𝗼𝗹 kami ya, sehingga produk yang di kirim semua dalam kondisi yang BAIK dan BAGUS<br/>
                                    <br/>
                                    ❣ Setiap Good Review & 5 STAR kamu sangat berarti untuk kami ya Bestie ❣<br/>
                                    <br/>
                                    🛒 HAPPY SHOPPING 🛒
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="hidden col-span-2 row-span-2 relative lg:block">
                        <div class="sticky w-full top-28 left-0 border border-gray-400 rounded-xl p-3">
                            <p class="font-semibold">Atur jumlah pembelian</p>
                            <hr class="border-t border-gray-200 my-4">
                            <form action="" class="flex flex-col gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="relative w-24"> 
                                        <button class="absolute top-1/2 -translate-y-1/2 left-2 text-lg">-</button>
                                        <input type="number" class="rounded-lg border border-gray-400 text-center no-spinner w-full py-0.5" value="1" min="1">
                                        <button class="absolute top-1/2 -translate-y-1/2 right-2 text-lg">+</button>
                                    </div>
                                    <h3>Stok: <span class="font-medium">124</span></h3>
                                </div>
                                <div class="flex flex-wrap justify-between items-center">
                                    <p class="text-gray-500">Subtotal</p>
                                    <h3 class="text-lg font-semibold">Rp600.000</h3>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <button class="bg-blue-600 text-white py-2 rounded-lg font-medium">+ Keranjang</button>
                                    <button class="border border-blue-600 text-blue-600 py-2 rounded-lg font-medium">Beli Langsung</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-span-full border-t border-gray-200 pt-14 pb-10 lg:col-span-7">
                        <h2 class="text-xl font-semibold mb-3">ULASAN PEMBELI</h2>
                        <div class="flex flex-col items-center gap-8 bg-gradient-to-t from-blue-100 via-blue-50 to-white border border-gray-200 rounded-lg py-5 px-5 md:px-10 md:gap-16 md:flex-row">
                            <div class="flex flex-shrink-0 items-center gap-2">
                                 <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                 <p><span class="text-2xl font-medium">4.5</span> dari 5</p>
                            </div>
                            <div class="flex text-sm gap-2 flex-wrap lg:gap-5 lg:gap-base">
                                <a href="" class="px-5 py-1 rounded-md border border-blue-600 text-blue-600">Semua</a>
                                <a href="" class="px-5 py-1 rounded-md border border-blue-600 text-blue-600">5 Bintang (10)</a>
                                <a href="" class="px-5 py-1 rounded-md border border-blue-600 text-blue-600">4 Bintang (2)</a>
                                <a href="" class="px-5 py-1 rounded-md border border-blue-600 text-blue-600">3 Bintang</a>
                                <a href="" class="px-5 py-1 rounded-md border border-blue-600 text-blue-600">2 Bintang</a>
                                <a href="" class="px-5 py-1 rounded-md border border-blue-600 text-blue-600">1 Bintang</a>
                            </div>
                        </div>
                        <div class="mt-10">
                            <div class="flex gap-5 items-start">
                                <img src="{{ asset('assets/ilustration/user.jpg') }}" alt="" class="w-10 rounded-full lg:w-16">
                                <div class="flex flex-col gap-3">
                                    <div>
                                        <h6 class="font-medium text-sm lg:text-base">Farhan Wahyudi</h6>
                                        <div class="flex gap-1">
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                        </div>
                                        <span class="text-gray-400 text-xs lg:text-sm">12-07-2025 10:12</span>
                                    </div>
                                    <p class="text-sm lg:text-base">bahannya bagus tebal. warnanya segarr. suka sekali warna hijaunya sampai beli 8 unit. pengiriman cepat. mantap</p>
                                    <div class="flex gap-3">
                                        <img src="{{ asset('assets/reviews/gambar1.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                        <img src="{{ asset('assets/reviews/gambar2.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                        <img src="{{ asset('assets/reviews/gambar3.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                    </div>
                                </div>
                            </div>
                            <hr class="border-t border-gray-200 my-10">
                            <div class="flex gap-5 items-start">
                                <img src="{{ asset('assets/ilustration/user.jpg') }}" alt="" class="w-10 rounded-full lg:w-16">
                                <div class="flex flex-col gap-3">
                                    <div>
                                        <h6 class="font-medium text-sm lg:text-base">Farhan Wahyudi</h6>
                                        <div class="flex gap-1">
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                        </div>
                                        <span class="text-gray-400 text-xs lg:text-sm">12-07-2025 10:12</span>
                                    </div>
                                    <p class="text-sm lg:text-base">bahannya bagus tebal. warnanya segarr. suka sekali warna hijaunya sampai beli 8 unit. pengiriman cepat. mantap</p>
                                    <div class="flex gap-3">
                                        <img src="{{ asset('assets/reviews/gambar1.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                        <img src="{{ asset('assets/reviews/gambar2.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                        <img src="{{ asset('assets/reviews/gambar3.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                    </div>
                                </div>
                            </div>
                            <hr class="border-t border-gray-200 my-10">
                            <div class="flex gap-5 items-start">
                                <img src="{{ asset('assets/ilustration/user.jpg') }}" alt="" class="w-10 rounded-full lg:w-16">
                                <div class="flex flex-col gap-3">
                                    <div>
                                        <h6 class="font-medium text-sm lg:text-base">Farhan Wahyudi</h6>
                                        <div class="flex gap-1">
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                            <svg class="w-3 lg:w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>
                                        </div>
                                        <span class="text-gray-400 text-xs lg:text-sm">12-07-2025 10:12</span>
                                    </div>
                                    <p class="text-sm lg:text-base">bahannya bagus tebal. warnanya segarr. suka sekali warna hijaunya sampai beli 8 unit. pengiriman cepat. mantap</p>
                                    <div class="flex gap-3">
                                        <img src="{{ asset('assets/reviews/gambar1.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                        <img src="{{ asset('assets/reviews/gambar2.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                        <img src="{{ asset('assets/reviews/gambar3.jpeg') }}" alt="" class="w-16 h-16 rounded-lg object-cover object-center lg:w-20 lg:h-20">
                                    </div>
                                </div>
                            </div>
                            <hr class="border-t border-gray-200 my-10">
                            
                        </div>
                    </div>
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
