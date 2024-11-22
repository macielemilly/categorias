<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-4xl text-gray-800 dark:text-red-700 leading-loose">
            {{ __('Inicio') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 font-semibold text-2xl">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-black dark:border-gray-700">
                    
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Produtos</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Gerencie e acompanhe seus produtos com facilidade.</p>
                    <a href="" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                        veja mais
                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div> 

                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-black dark:border-red-900">
                    
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Categorias</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Classifique seus produtos de maneira eficiente. </p>
                    <a href="{{ route('categories.index') }}" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                        veja mais
                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div>
                
                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-black dark:border-gray-700">
                    
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Fornecedores</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Centralize informações dos seus fornecedores.</p>
                    <a href="{{ route('suppliers.index') }}" class="inline-flex font-medium items-center text-blue-600 hover:underline">
                        veja mais
                        <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
                        </svg>
                    </a>
                </div>

                
            </div>
        </div>
    </div>

</x-app-layout>