<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaMod extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $fillable = ['Nis', 'Nisn', 'Nama', 'TanggalLahir', 'TempatLahir', 'JenisKelamin'];
}
