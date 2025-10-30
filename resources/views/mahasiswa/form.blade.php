<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ $mahasiswa->exists ? 'Edit Mahasiswa' : 'Tambah Mahasiswa' }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-12 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg animate-slide-up">
                <div class="p-4 sm:p-6 text-zinc-900">

                    <!-- Cool Error Alert -->
                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-400 rounded-lg alert-slide-down alert-glow">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-400 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-red-800">
                                        Terdapat kesalahan dalam pengisian data:
                                    </h3>
                                    <div class="mt-2 text-sm text-red-700">
                                        <ul class="list-disc list-inside space-y-1">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" 
                          action="{{ $mahasiswa->exists ? route('mahasiswa.update', $mahasiswa) : route('mahasiswa.store') }}"
                          class="space-y-6">
                        @csrf
                        @if ($mahasiswa->exists)
                            @method('PUT')
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="animate-scale-in">
                                <x-input-label for="nim" :value="__('NIM')" />
                                <x-text-input id="nim" class="block mt-1 w-full transition-all duration-300 focus:scale-105 focus:ring-2 focus:ring-primary-500" 
                                              type="text" name="nim" :value="old('nim', $mahasiswa->nim)" required autofocus />
                                <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                            </div>

                            <div class="animate-scale-in" style="animation-delay: 0.1s;">
                                <x-input-label for="nama" :value="__('Nama Lengkap')" />
                                <x-text-input id="nama" class="block mt-1 w-full transition-all duration-300 focus:scale-105 focus:ring-2 focus:ring-primary-500" 
                                              type="text" name="nama" :value="old('nama', $mahasiswa->nama)" required />
                                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                            </div>

                            <div class="animate-scale-in" style="animation-delay: 0.2s;">
                                <x-input-label for="jurusan" :value="__('Jurusan')" />
                                <x-text-input id="jurusan" class="block mt-1 w-full transition-all duration-300 focus:scale-105 focus:ring-2 focus:ring-primary-500" 
                                              type="text" name="jurusan" :value="old('jurusan', $mahasiswa->jurusan)" required />
                                <x-input-error :messages="$errors->get('jurusan')" class="mt-2" />
                            </div>

                            <div class="animate-scale-in" style="animation-delay: 0.3s;">
                                <x-input-label for="angkatan" :value="__('Angkatan (Contoh: 2022)')" />
                                <x-text-input id="angkatan" class="block mt-1 w-full transition-all duration-300 focus:scale-105 focus:ring-2 focus:ring-primary-500" 
                                              type="number" name="angkatan" :value="old('angkatan', $mahasiswa->angkatan)" required />
                                <x-input-error :messages="$errors->get('angkatan')" class="mt-2" />
                            </div>
                        </div>

                        <div class="animate-scale-in" style="animation-delay: 0.4s;">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full transition-all duration-300 focus:scale-105 focus:ring-2 focus:ring-primary-500" 
                                          type="email" name="email" :value="old('email', $mahasiswa->email)" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="flex flex-col sm:flex-row items-center justify-end gap-4 mt-8 animate-slide-up" style="animation-delay: 0.5s;">
                            <a href="{{ route('mahasiswa.index') }}" class="w-full sm:w-auto">
                                <x-secondary-button class="w-full sm:w-auto hover:scale-105 transition-all duration-200">
                                    {{ __('Batal') }}
                                </x-secondary-button>
                            </a>
                            <x-primary-button class="w-full sm:w-auto hover:scale-105 transition-all duration-200">
                                {{ $mahasiswa->exists ? 'Update' : 'Simpan' }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>