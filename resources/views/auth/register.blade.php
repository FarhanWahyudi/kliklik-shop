<x-guest-layout>
    <div class="w-[90%] grid grid-cols-1 items-start my-6 bg-white shadow-lg shadow-slate-300 overflow-hidden rounded-3xl lg:grid-cols-2 md:w-[70%] lg:w-[80%] 2xl:w-[50%]">
        <div class="bg-[linear-gradient(10deg,_#0ea5e9,_#6366f1)] h-full p-5 sm:p-10">
            <h2 class="font-bold text-4xl text-white sm:text-5xl">Langkah Pertama Menuju Kemudahan</h2>
            <h4 class="mt-5 text-sm/5 mb-20 text-white sm:text-base/5">
                Buat akun Anda dan nikmati pengalaman berbelanja yang lebih baik bersama kami.
            </h4>
            <img src="{{ asset('assets/ilustration/image-login.png') }}" alt="">
        </div>
        <form method="POST" action="{{ route('register') }}" class="px-5 py-8 sm:py-10 sm:px-16">
            <div class="flex flex-col items-center justify-center mb-12">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/logo/kliklik-shop.png') }}" alt="kliklik-shop" class="w-16">
                    <h2 class="font-semibold text-gray-700 text-xl -mt-3 lg:text-2xl">Kliklik<span class="text-blue-600 font-bold">Shop</span></h2>
                </div>
                <h1 class="font-semibold text-3xl lg:text-4xl">Sign Up</h1>
            </div>

            @csrf
    
            <!-- Name -->
            <div>
                <x-text-input id="name" placeholder="Name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input id="email" placeholder="Email address" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                                placeholder="Password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                placeholder="Confirm password"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <x-primary-button class="mt-6">
                {{ __('Register') }}
            </x-primary-button>
    
            
            <p class="mt-3 text-center text-sm text-gray-600">Already have an account? <a href="/login" class="text-blue-500 font-semibold">Log in</a></p>
            
        </form>
    </div>
</x-guest-layout>
