<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-12 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg animate-slide-up">
                <div class="p-4 sm:p-6 text-zinc-900">
                    <div class="flex flex-col sm:flex-row items-center">
                        <div class="flex-shrink-0 mb-4 sm:mb-0">
                            <svg class="h-10 w-10 text-primary-600 animate-pulse-slow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v11.494m-9-5.747h18" />
                            </svg>
                        </div>
                        <div class="sm:ml-4 text-center sm:text-left">
                            <h3 class="text-lg font-medium">Selamat Datang, {{ Auth::user()->name }}!</h3>
                            <p class="mt-1 text-sm text-zinc-600">
                                Anda telah berhasil login ke Sistem Manajemen Data Mahasiswa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-6">
                <!-- Card 1: Kelola Mahasiswa -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-zinc-200 hover:shadow-lg hover:scale-105 transition-all duration-300 animate-scale-in">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-8 w-8 text-primary-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                  <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.25 1.25 0 0 0 2.405 1.022A4.997 4.997 0 0 1 10 12.5a4.997 4.997 0 0 1 4.13 3.015 1.25 1.25 0 0 0 2.405-1.022A7.497 7.497 0 0 0 10 11a7.497 7.497 0 0 0-6.535 3.493Z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-semibold">Kelola Mahasiswa</h4>
                                <p class="mt-1 text-sm text-zinc-600">
                                    Akses dan kelola data mahasiswa.
                                </p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="{{ route('mahasiswa.index') }}"
                               class="inline-flex items-center px-4 py-2 bg-primary-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-500 focus:bg-primary-700 active:bg-primary-900 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 transition-all duration-200 hover:scale-105">
                                Buka
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>