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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-zinc-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 login-bg relative overflow-hidden">
            <!-- Floating background elements -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute top-10 left-10 w-20 h-20 bg-white/10 rounded-full animate-float"></div>
                <div class="absolute top-32 right-20 w-16 h-16 bg-white/5 rounded-full animate-float-delayed"></div>
                <div class="absolute bottom-20 left-20 w-24 h-24 bg-white/8 rounded-full animate-float-slow"></div>
                <div class="absolute bottom-32 right-10 w-12 h-12 bg-white/6 rounded-full animate-float"></div>
                <div class="absolute top-1/2 left-1/4 w-8 h-8 bg-white/4 rounded-full animate-float-delayed"></div>
                <div class="absolute top-1/3 right-1/3 w-14 h-14 bg-white/7 rounded-full animate-float-slow"></div>
            </div>
            
            <div class="relative z-10">
                <a href="/" class="animate-bounce-in">
                    <x-application-logo class="w-20 h-20 fill-current text-zinc-600" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white/90 backdrop-blur-sm shadow-lg overflow-hidden sm:rounded-lg relative z-10">
                {{ $slot }}
            </div>

            <!-- Footer for guest layout -->
            <footer class="absolute bottom-0 left-0 right-0 bg-white/80 backdrop-blur-sm border-t border-zinc-200 py-2">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-1 md:space-y-0">
                        <div class="text-xs text-zinc-600">
                            © {{ date('Y') }} <span class="font-semibold text-zinc-900"></span>. All rights reserved.
                        </div>
                        <div class="text-xs text-zinc-600">
                            Made by <a href="https://github.com/halfthew0rldaway" target="_blank" rel="noopener noreferrer" 
                                               class="text-primary-600 hover:text-primary-800 transition-colors duration-200 font-semibold">@halfthew0rldaway</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
