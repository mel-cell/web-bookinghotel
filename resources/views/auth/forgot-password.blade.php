<x-guest-layout>
    <!-- Title -->
    <h2 class="text-3xl font-bold text-center text-[#74A6AF] mb-6 tracking-wider">RESET PASSWORD</h2>

    <div class="mb-6 text-sm text-gray-600 font-medium text-center">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <label for="email" class="block font-bold text-gray-700 mb-2">Email</label>
            <input id="email" class="block w-full rounded-xl border-none bg-[#9CC0C9]/50 focus:bg-[#9CC0C9]/70 focus:ring-2 focus:ring-[#74A6AF] py-3 px-4 text-gray-800 placeholder-gray-500 transition-all" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex flex-col items-center gap-4">
            <button type="submit" class="w-full bg-[#9CC0C9] text-white font-bold text-lg py-3 rounded-full hover:bg-[#74A6AF] transition-all shadow-md mt-2">
                {{ __('Email Password Reset Link') }}
            </button>
            
            <a class="text-sm text-gray-800 font-bold hover:text-[#74A6AF] transition-colors" href="{{ route('login') }}">
                Back to Login
            </a>
        </div>
    </form>
</x-guest-layout>
