<x-guest-layout>
    <div class="flex w-full max-w-screen-lg bg-black text-white rounded-lg shadow-lg p-8 sm:flex-row flex-col mx-auto">
        
        <div class="flex-1 p-4">
            <h2 class="font-bold text-4xl mb-3">Criar Conta</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                
                <div class="mt-4 mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

               
                <div class="mt-4 mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                
                <div class="mt-4 mb-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <a class="underline text-sm text-gray-400 hover:text-gray-100" href="{{ route('login') }}">
                        {{ __('Já tem uma conta?') }}
                    </a>

                    <x-primary-button class="ml-3">
                        {{ __('Registrar') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

     
        <div class="flex-1 flex items-center justify-center border-t sm:border-t-0 sm:border-l border-gray-700 p-2">
            <img src="{{ asset('images/logossports.png') }}" alt="Logo" class="w-80 h-80">
        </div>
    </div>
</x-guest-layout>
