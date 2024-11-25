<x-guest-layout>
    <div class="flex flex-col sm:flex-row w-full max-w-screen-lg bg-black text-white rounded-lg shadow-lg p-8 mx-auto">

        <div class="flex-1 p-4">
            <x-auth-session-status class="mb-3" :status="session('status')" />

            <h2 class="font-bold text-4xl mb-3">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Senha')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 text-red-700 shadow-sm focus:ring-red-700" name="remember">
                        <span class="ml-2 text-sm text-gray-400">{{ __('Lembrar-me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <div class="justify-around"> 
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-400 hover:text-gray-100" href="{{ route('password.request') }}">
                                {{ __('Esqueceu sua senha?') }}
                            </a>
                        @endif
                        @if (Route::has('register'))
                            <a class="underline text-sm text-gray-400 hover:text-gray-100 ml-4" href="{{ route('register') }}">
                                {{ __('Não possui uma conta?') }}
                            </a>
                        @endif
                    </div>

                    <x-primary-button class="ml-3">
                        {{ __('Entrar') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

       
        <div class="flex-1 flex items-center justify-center sm:border-l border-t sm:border-t-0 border-gray-700 p-2">
            <img src="{{ asset('images/logossports.png') }}" alt="Logo" class="w-64 h-64 sm:w-80 sm:h-80 hidden sm:block">
        </div>
    </div>
</x-guest-layout>
