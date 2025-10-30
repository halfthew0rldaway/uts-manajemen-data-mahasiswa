<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!-- Link font 'Figtree' bawaan sudah dihapus. -->
        <!-- Kita menggunakan font 'Inter' yang di-import dari resources/css/app.css -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <!-- Mengganti warna background default ke palet 'zinc' baru kita -->
        <div class="min-h-screen bg-zinc-100 flex flex-col">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-1">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-zinc-200 mt-auto">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-2 md:space-y-0">
                        <div class="text-sm text-zinc-600">
                            © {{ date('Y') }} <span class="font-semibold text-zinc-900"></span>. All rights reserved.
                        </div>
                        <div class="text-sm text-zinc-600">
                            Made by <a href="https://github.com/halfthew0rldaway" target="_blank" rel="noopener noreferrer" 
                                               class="text-primary-600 hover:text-primary-800 transition-colors duration-200 font-semibold">@halfthew0rldaway</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
