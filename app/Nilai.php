<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'mahasiswas_pelajarans';
    protected $fillable = ['mahasiswa_id' , 'pelajaran_id' , 'nilai'];
}