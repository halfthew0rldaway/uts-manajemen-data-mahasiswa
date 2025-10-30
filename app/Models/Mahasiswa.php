<?php
// app/Models/Mahasiswa.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Import BelongsTo

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * Tentukan kolom mana saja yang boleh diisi massal
     * (PENTING UNTUK CREATE & UPDATE)
     */
    protected $fillable = [
        'nim',
        'nama',
        'jurusan',
        'angkatan',
        'email',
        'user_id', // Pastikan user_id ada di sini
    ];

    /**
     * Relasi ke User: Satu Mahasiswa dimiliki oleh satu User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}