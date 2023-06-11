<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // membaca data
    protected $table = 'mahasiswa';

    // manipulasi data
    protected $fillable = [
        'nim',
        'nama',
        'gender',
        'prodi',
        'minat'
    ];
}