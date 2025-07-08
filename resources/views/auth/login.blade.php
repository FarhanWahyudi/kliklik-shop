<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="w-[90%] grid grid-cols-1 items-start my-6 bg-white shadow-lg shadow-slate-300 overflow-hidden rounded-3xl lg:grid-cols-2 md:w-[70%] lg:w-[80%] 2xl:w-[50%]">
        <div class="bg-[linear-gradient(10deg,_#0ea5e9,_#6366f1)] h-full p-5 sm:p-10">
            <h2 class="font-bold text-4xl text-white sm:text-5xl">Welcome Back</h2>
            <h4 class="mt-5 text-sm/5 mb-20 text-white sm:text-base/5">
                Senang dapat melihat anda kembali, silakan login untuk melihat produk kami
            </h4>
            <img src="{{ asset('assets/ilustration/image-login.png') }}" alt="">
        </div>
        <form method="POST" action="{{ route('login') }}" class="px-5 py-8 sm:py-16 sm:px-16">
            @csrf
    
            <div class="flex flex-col items-center justify-center mb-12">
                <h2 class="font-semibold text-xl lg:text-2xl">Kliklik Shop</h2>
                <h1 class="font-semibold text-3xl lg:text-4xl">Sing In</h1>
            </div>
            <!-- Email Address -->
            <div>
                <x-text-input id="email" placeholder="Email address" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="block mt-1 w-full"
                                placeholder="Password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <div class="text-end mt-2">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>

            <x-primary-button class="mt-5">
                {{ __('Log in') }}
            </x-primary-button>

            <p class="mt-3 text-center text-sm text-gray-600">Don't have an account? <a href="/register" class="text-blue-500 font-semibold">Sign up</a></p>
        </form>
    </div>
</x-guest-layout>
