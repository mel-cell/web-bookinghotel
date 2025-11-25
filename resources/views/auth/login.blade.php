<x-guest-layout>
    <!-- Title -->
    <h2 class="text-4xl font-bold text-center text-[#74A6AF] mb-8 tracking-wider">LOGIN</h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <label for="email" class="block font-bold text-gray-700 mb-2">Email</label>
            <input id="email" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <label for="password" class="block font-bold text-gray-700 mb-2">Password</label>
            <input id="password" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mb-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-[#74A6AF] shadow-sm focus:ring-[#74A6AF]" name="remember">
                <span class="ms-2 text-sm text-gray-600 font-bold">remember me</span>
            </label>
        </div>

        <div class="flex flex-col items-center gap-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-800 font-bold hover:text-[#74A6AF] transition-colors" href="{{ route('password.request') }}">
                    forget your password?
                </a>
            @endif

            <button type="submit" class="w-1/2 bg-[#9CC0C9] text-white font-bold text-xl py-3 rounded-full hover:bg-[#74A6AF] transition-all shadow-md mt-4">
                Login
            </button>
        </div>
    </form>
</x-guest-layout>
