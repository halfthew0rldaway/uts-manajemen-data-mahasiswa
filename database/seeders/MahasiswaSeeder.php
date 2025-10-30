<?php
// database/seeders/MahasiswaSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa; // Import Mahasiswa

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = [
            // Data Mahasiswa Milik User 1 (Admin)
            ['user_id' => 1, 'nim' => '111111', 'nama' => 'Budi Santoso', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2022, 'email' => 'budi.santoso@gmail.com'],
            ['user_id' => 1, 'nim' => '111112', 'nama' => 'Ani Rahayu', 'jurusan' => 'Sistem Informasi', 'angkatan' => 2021, 'email' => 'ani.rahayu@gmail.com'],
            ['user_id' => 1, 'nim' => '111113', 'nama' => 'Cahyo Pratama', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'cahyo.pratama@gmail.com'],
            ['user_id' => 1, 'nim' => '111114', 'nama' => 'Dewi Kartika', 'jurusan' => 'Teknik Komputer', 'angkatan' => 2022, 'email' => 'dewi.kartika@gmail.com'],
            ['user_id' => 1, 'nim' => '111115', 'nama' => 'Eko Wijaya', 'jurusan' => 'Sistem Informasi', 'angkatan' => 2021, 'email' => 'eko.wijaya@gmail.com'],
            ['user_id' => 1, 'nim' => '111116', 'nama' => 'Fitri Sari', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'fitri.sari@gmail.com'],
            ['user_id' => 1, 'nim' => '111117', 'nama' => 'Gunawan Putra', 'jurusan' => 'Teknik Komputer', 'angkatan' => 2022, 'email' => 'gunawan.putra@gmail.com'],
            ['user_id' => 1, 'nim' => '111118', 'nama' => 'Hesti Lestari', 'jurusan' => 'Sistem Informasi', 'angkatan' => 2021, 'email' => 'hesti.lestari@gmail.com'],
            ['user_id' => 1, 'nim' => '111119', 'nama' => 'Indra Kurniawan', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'indra.kurniawan@gmail.com'],
            ['user_id' => 1, 'nim' => '111120', 'nama' => 'Jihan Maharani', 'jurusan' => 'Teknik Komputer', 'angkatan' => 2022, 'email' => 'jihan.maharani@gmail.com'],
            ['user_id' => 1, 'nim' => '111121', 'nama' => 'Krisna Aditya', 'jurusan' => 'Sistem Informasi', 'angkatan' => 2021, 'email' => 'krisna.aditya@gmail.com'],
            ['user_id' => 1, 'nim' => '111122', 'nama' => 'Lina Marlina', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'lina.marlina@gmail.com'],
            ['user_id' => 1, 'nim' => '111123', 'nama' => 'Muhammad Rizki', 'jurusan' => 'Teknik Komputer', 'angkatan' => 2022, 'email' => 'muhammad.rizki@gmail.com'],
            ['user_id' => 1, 'nim' => '111124', 'nama' => 'Nina Sari', 'jurusan' => 'Sistem Informasi', 'angkatan' => 2021, 'email' => 'nina.sari@gmail.com'],
            ['user_id' => 1, 'nim' => '111125', 'nama' => 'Oscar Pratama', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'oscar.pratama@gmail.com'],

            // Data Mahasiswa Milik User 2 (Staf)
            ['user_id' => 2, 'nim' => '222221', 'nama' => 'Charlie Brown', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'charlie.brown@gmail.com'],
            ['user_id' => 2, 'nim' => '222222', 'nama' => 'Diana Putri', 'jurusan' => 'Sistem Informasi', 'angkatan' => 2022, 'email' => 'diana.putri@gmail.com'],
            ['user_id' => 2, 'nim' => '222223', 'nama' => 'Evan Wijaya', 'jurusan' => 'Teknik Komputer', 'angkatan' => 2021, 'email' => 'evan.wijaya@gmail.com'],
            ['user_id' => 2, 'nim' => '222224', 'nama' => 'Fiona Sari', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'fiona.sari@gmail.com'],
            ['user_id' => 2, 'nim' => '222225', 'nama' => 'George Kurniawan', 'jurusan' => 'Sistem Informasi', 'angkatan' => 2022, 'email' => 'george.kurniawan@gmail.com'],
            ['user_id' => 2, 'nim' => '222226', 'nama' => 'Hannah Lestari', 'jurusan' => 'Teknik Komputer', 'angkatan' => 2021, 'email' => 'hannah.lestari@gmail.com'],
            ['user_id' => 2, 'nim' => '222227', 'nama' => 'Ivan Pratama', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'ivan.pratama@gmail.com'],
            ['user_id' => 2, 'nim' => '222228', 'nama' => 'Julia Maharani', 'jurusan' => 'Sistem Informasi', 'angkatan' => 2022, 'email' => 'julia.maharani@gmail.com'],
            ['user_id' => 2, 'nim' => '222229', 'nama' => 'Kevin Aditya', 'jurusan' => 'Teknik Komputer', 'angkatan' => 2021, 'email' => 'kevin.aditya@gmail.com'],
            ['user_id' => 2, 'nim' => '222230', 'nama' => 'Luna Marlina', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'email' => 'luna.marlina@gmail.com'],
        ];

        foreach ($mahasiswas as $mahasiswa) {
            Mahasiswa::create($mahasiswa);
        }
    }
}