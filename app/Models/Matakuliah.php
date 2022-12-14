<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matkul';

    protected $fillable = [
        'id', 'kode_matkul', 'nama_matkul', 'sks',
    ];
}
