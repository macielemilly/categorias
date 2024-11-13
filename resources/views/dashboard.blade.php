<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-4xl text-gray-800 dark:text-red-700 leading-loose">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 font-semibold text-2xl">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="bg-white dark:bg-black overflow-hidden shadow-sm sm:rounded-lg h-36">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Produtos") }}
                </div>
            </div>
            
            <div class="bg-white dark:bg-red-900 overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Categorias") }}
                </div>
            </div>
            
            <div class="bg-white dark:bg-black overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Fornecedores") }}
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
