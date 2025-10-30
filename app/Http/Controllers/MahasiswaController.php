<?php
// app/Http/Controllers/MahasiswaController.php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
// Import Form Request yang tadi kita buat
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use Illuminate\Http\Request; // Import Request
use Illuminate\Support\Facades\Auth; // Import Auth

class MahasiswaController extends Controller
{
    /**
     * Menampilkan semua data mahasiswa milik user yang sedang login 
     * Termasuk Fitur Bonus (Search) [cite: 41]
     */
    public function index(Request $request)
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Mulai query data mahasiswa HANYA milik user tsb.
        $query = $user->mahasiswas();

        // Cek jika ada input search (untuk bonus)
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama', 'like', '%'.$search.'%')
                  ->orWhere('nim', 'like', '%'.$search.'%');
            });
        }

        // Ambil datanya
        $mahasiswas = $query->latest()->paginate(10); // tampilkan 10 data per halaman

        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Menampilkan form tambah data 
     */
    public function create()
    {
        // Kita pakai 1 form untuk create & edit,
        // jadi kita kirim model Mahasiswa kosong
        return view('mahasiswa.form', [
            'mahasiswa' => new Mahasiswa()
        ]);
    }

    /**
     * Menyimpan data mahasiswa baru 
     */
    public function store(StoreMahasiswaRequest $request)
    {
        // Validasi otomatis dijalankan oleh StoreMahasiswaRequest
        
        // Simpan data, tapi kaitkan dengan user_id yang sedang login
        $data = $request->validated();
        $request->user()->mahasiswas()->create($data);

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit data 
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        // Proteksi: Pastikan user hanya bisa edit data miliknya sendiri
        if ($mahasiswa->user_id !== Auth::id()) {
            abort(403, 'ANDA TIDAK PUNYA AKSES UNTUK MENGEDIT DATA INI.');
        }

        return view('mahasiswa.form', compact('mahasiswa'));
    }

    /**
     * Update data mahasiswa 
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        // Proteksi: Pastikan user hanya bisa update data miliknya sendiri
        if ($mahasiswa->user_id !== Auth::id()) {
            abort(403, 'ANDA TIDAK PUNYA AKSES UNTUK UPDATE DATA INI.');
        }

        // Validasi otomatis oleh UpdateMahasiswaRequest
        $data = $request->validated();
        $mahasiswa->update($data);

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    /**
     * Hapus data mahasiswa 
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        // Proteksi: Pastikan user hanya bisa hapus data miliknya sendiri
        if ($mahasiswa->user_id !== Auth::id()) {
            abort(403, 'ANDA TIDAK PUNYA AKSES UNTUK MENGHAPUS DATA INI.');
        }
        
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}