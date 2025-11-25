<x-guest-layout>
    <!-- Title -->
    <h2 class="text-4xl font-bold text-center text-[#74A6AF] mb-8 tracking-wider">REGISTER</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block font-bold text-gray-700 mb-2">Name</label>
            <input id="name" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block font-bold text-gray-700 mb-2">Email</label>
            <input id="email" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block font-bold text-gray-700 mb-2">Password</label>
            <input id="password" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-6">
            <label for="password_confirmation" class="block font-bold text-gray-700 mb-2">Confirm Password</label>
            <input id="password_confirmation" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center gap-4">
            <a class="text-sm text-gray-800 font-bold hover:text-[#74A6AF] transition-colors" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="w-1/2 bg-[#9CC0C9] text-white font-bold text-xl py-3 rounded-full hover:bg-[#74A6AF] transition-all shadow-md mt-4">
                Register
            </button>
        </div>
    </form>
</x-guest-layout>
