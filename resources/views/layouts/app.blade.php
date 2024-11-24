<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex min-h-screen bg-gray-100  overflow-x-auto ">

        <aside id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-black text-white p-4 transform -translate-x-full md:translate-x-0  transition-transform">
            <div class="flex items-center justify-center py-6 border-b border-gray-700">
                <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/logossports.png') }}" alt="Logo" class="w-16 h-16">
                </a>
            </div>

           
            <nav class="mt-6 space-y-1">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-4 py-3 px-4 hover:bg-red-700 rounded-lg transition">
                    <i class="fas fa-home text-lg"></i>
                    <span>Início</span>
                </a>
                <a href="{{ route('products.index') }}" class="flex items-center space-x-4 py-3 px-4 hover:bg-red-700 rounded-lg transition">
                    <i class="fas fa-boxes text-lg"></i>
                    <span>Produtos</span>
                </a>
                <a href="{{ route('categories.index') }}" class="flex items-center space-x-4 py-3 px-4 hover:bg-red-700 rounded-lg transition">
                    <i class="fas fa-tags text-lg"></i>
                    <span>Categorias</span>
                </a>
                <a href="{{ route('suppliers.index') }}" class="flex items-center space-x-4 py-3 px-4 hover:bg-red-700 rounded-lg transition">
                    <i class="fas fa-truck text-lg"></i>
                    <span>Fornecedores</span>
                </a>
                <div class="border-t border-gray-700">
                    <a href="{{ route('profile.edit') }}" class="flex items-center space-x-4 py-3 px-4 hover:bg-red-700 rounded-lg transition mt-2">
                        <i class="fa-solid fa-user"></i>
                        <span>Perfil</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')" class="flex items-center space-x-4 py-3 px-4 hover:bg-red-700 rounded-lg transition"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket text-lg"></i>
                            <span>Sair</span>
                        </a>
                    </form>
                </div>
            </nav>
        </aside>

       
        <button id="menu-toggle" class="fixed top-4 left-4 z-50 md:hidden text-white p-2 rounded-md focus:outline-none bg-black">
            <i class="fas fa-bars text-xl"></i>
        </button>

       
        <div class="flex-grow md:ml-64">
            @include('layouts.navigation')
            @isset($header)
                <header>
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset
            <main class="p-6 overflow-x-auto bg-gray-100">
                {{ $slot }}
            </main>
        </div>
    </div>

    <!-- codigo pra abir ou fechar quando tiver pequeno -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>

</html>
