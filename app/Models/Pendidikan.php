<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pendidikan';

    // Tambahkan baris ini agar Laravel tidak mencari kolom created_at & updated_at
    public $timestamps = false;

    protected $fillable = ['nama', 'tingkatan', 'tahun_masuk', 'tahun_keluar'];
}