@extends('layouts.app')

@section('content')

    @include('partials.navbar-mobile')

    {{-- Profile --}}
    <div class="flex justify-center items-start min-h-screen py-5 lg:py-10 mt-14 md:mt-20">
        <div class="w-[95%] px-3 pb-10 pt-3 rounded-2xl shadow-md shadow-gray-200 md:w-[85%] sm:px-5 sm:pt-5 xl:w-[70%] 2xl:w-[65%]">
            <h1 class="font-semibold text-xl md:text-2xl">Profil Saya</h1>
            <hr class="border-t border-gray-200 mt-5 mb-10 md:mb-16">
            <form action="" class="flex flex-col px-3 md:px-10 lg:px-20">
                <div class="flex flex-col gap-3 items-center">
                    <img src="https://cdn.pixabay.com/photo/2023/02/18/11/00/icon-7797704_640.png" alt="" class="w-36 h-36 rounded-full">
                    <label for="photo" class="border border-gray-400 rounded-xl text-gray-700 px-5 py-2">Pilih Gambar</label>
                    <input type="file" id="photo" class="hidden">
                    <div class="flex flex-col text-gray-600 text-sm">
                        <span>Ukuran gambar: maks. 1 MB</span>
                        <span>Format gambar: .JPEG, .PNG</span>
                    </div>
                </div>
                <hr class="border-t border-gray-200 my-10 md:mb-16">
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col items-start gap-1 md:gap-2 md:flex-row md:items-center">
                        <label for="name" class="text-gray-500 md:w-36">Nama</label>
                        <input type="text" name="name" id="name" class="flex-1 w-full border border-gray-400 text-gray-800 rounded-lg focus:ring-0" value="Farhan Wahyudi">
                    </div>
                    <div class="flex flex-col items-start gap-1 md:gap-2 md:flex-row md:items-center">
                        <label for="email" class="text-gray-500 w-36">Email</label>
                        <input type="email" name="email" id="email" disabled class="flex-1 w-full border border-gray-300 text-gray-800 rounded-lg focus:ring-0" value="farhanwahyudi875@gmail.com">
                    </div>
                    <div class="flex flex-col items-start gap-1 md:gap-2 md:flex-row md:items-center">
                        <label for="phone" class="text-gray-500 w-36">Nomor Telepon</label>
                        <input type="number" name="phone" id="phone" class="flex-1 w-full no-spinner border border-gray-400 text-gray-800 rounded-lg focus:ring-0" value="089432742332">
                    </div>
                    <div class="flex flex-col items-start gap-1 md:gap-2 md:flex-row md:items-center">
                        <label for="address" class="text-gray-500 w-36">Alamat Lengkap</label>
                        <textarea type="text" name="address" id="address" class="w-full h-40 resize-none border border-gray-400 text-gray-800 rounded-lg focus:ring-0 sm:h-28 md:flex-1">Desa Kebonagung, kec. Kraksaan, kab. probolinggo, Jawa Timur</textarea>
                    </div>
                    <div class="flex justify-end">
                        <button class="px-6 py-2 bg-blue-600 text-white rounded-md">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection