<x-guest-layout>
    <!-- Title -->
    <h2 class="text-3xl font-bold text-center text-[#74A6AF] mb-8 tracking-wider">RESET PASSWORD</h2>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block font-bold text-gray-700 mb-2">Email</label>
            <input id="email" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block font-bold text-gray-700 mb-2">Password</label>
            <input id="password" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all" type="password" name="password" required autocomplete="new-password" />
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

        <div class="flex items-center justify-center mt-4">
            <button type="submit" class="w-full bg-[#9CC0C9] text-white font-bold text-lg py-3 rounded-full hover:bg-[#74A6AF] transition-all shadow-md">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>
