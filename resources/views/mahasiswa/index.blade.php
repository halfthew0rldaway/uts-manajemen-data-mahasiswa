<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight"> <!-- Ubah text-gray-800 ke text-zinc-800 -->
            {{ __('Manajemen Data Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-6 sm:py-12 animate-fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Ubah bg-white ke bg-white -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg animate-slide-up">
                <div class="p-4 sm:p-6 text-zinc-900"> <!-- Ubah text-gray-900 ke text-zinc-900 -->
                    
                    <!-- Tombol Tambah Data & Search -->
                    <div class="flex flex-col md:flex-row md:items-center justify-between mb-6 gap-4 animate-scale-in">
                        <a href="{{ route('mahasiswa.create') }}">
                            <x-primary-button class="w-full md:w-auto bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-primary-500">
                                {{ __('Tambah Mahasiswa') }}
                            </x-primary-button>
                        </a>

                        <!-- FORM SEARCH (BONUS) -->
                        <form action="{{ route('mahasiswa.index') }}" method="GET" class="flex w-full md:w-auto md:max-w-sm">
                            <label for="search" class="sr-only">Cari</label>
                            <x-text-input id="search" type="text" name="search" placeholder="Cari Nama / NIM..."
                                          class="w-full mr-2 border-zinc-300 focus:border-primary-500 focus:ring-primary-500 placeholder-zinc-400 text-zinc-900" value="{{ request('search') }}" />
                            <x-primary-button type="submit" class="whitespace-nowrap bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-primary-500">
                                {{ __('Cari') }}
                            </x-primary-button>
                        </form>
                    </div>

                    <!-- Notifikasi Sukses -->
                    @if (session('success'))
                        <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-400 rounded-lg alert-slide-down">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-green-800">
                                        {{ session('success') }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Notifikasi Error -->
                    @if (session('error'))
                        <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-400 rounded-lg alert-slide-down alert-glow">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-red-400 animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-sm font-medium text-red-800">
                                        {{ session('error') }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Tabel Data Mahasiswa -->
                    <div class="overflow-x-auto border border-zinc-200 rounded-lg animate-slide-up">
                        <table class="min-w-full divide-y divide-zinc-200">
                            <!-- Ubah bg-gray-50 ke bg-zinc-100 -->
                            <thead class="bg-zinc-100">
                                <tr>
                                    <!-- Ubah text-gray-500 ke text-zinc-600 -->
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-zinc-600 uppercase tracking-wider">NIM</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-zinc-600 uppercase tracking-wider">Nama</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-zinc-600 uppercase tracking-wider">Jurusan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-zinc-600 uppercase tracking-wider">Angkatan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-zinc-600 uppercase tracking-wider">Email</th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Aksi</span>
                                    </th>
                                </tr>
                            </thead>
                            <!-- Ubah bg-white dan divide-gray-200 -->
                            <tbody class="bg-white divide-y divide-zinc-200">
                                @forelse ($mahasiswas as $mhs)
                                    <tr class="hover:bg-zinc-50 transition-colors duration-200">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-700">{{ $mhs->nim }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-zinc-900">{{ $mhs->nama }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-700">{{ $mhs->jurusan }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-700">{{ $mhs->angkatan }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-zinc-700">{{ $mhs->email }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <!-- Ubah text-indigo-600 ke text-primary-600 (theme color) -->
                                            <a href="{{ route('mahasiswa.edit', $mhs) }}" class="text-primary-600 hover:text-primary-800 mr-3">Edit</a>
                                            
                                            <!-- Tombol Hapus (pakai form) -->
                                            <form action="{{ route('mahasiswa.destroy', $mhs) }}" method="POST" class="inline" 
                                                  onsubmit="return confirm('⚠️ PERINGATAN!\n\nApakah Anda yakin ingin menghapus data mahasiswa ini?\n\nNama: {{ $mhs->nama }}\nNIM: {{ $mhs->nim }}\n\nTindakan ini TIDAK DAPAT DIBATALKAN!');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800 font-medium transition-colors duration-200">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center text-zinc-500">
                                            Data tidak ditemukan.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Links -->
                    <div class="mt-4">
                        {{ $mahasiswas->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>