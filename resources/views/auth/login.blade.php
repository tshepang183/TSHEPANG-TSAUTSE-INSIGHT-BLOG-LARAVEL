<x-guest-layout>
    <div class="bg-white rounded-lg shadow-md px-6 py-8 dark:bg-gray-800">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h2 class="text-2xl font-bold mb-6 text-center text-gray-700 dark:text-gray-200">{{ __('Login') }}</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">{{ __('Email') }}</label>
                <input id="email" class="form-input w-full dark:bg-gray-700 dark:text-gray-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">{{ __('Password') }}</label>
                <input id="password" class="form-input w-full dark:bg-gray-700 dark:text-gray-300" type="password" name="password" required autocomplete="current-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="mb-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:bg-indigo-600">
                    {{ __('Log in') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-500 hover:text-indigo-700 dark:text-indigo-400" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>
