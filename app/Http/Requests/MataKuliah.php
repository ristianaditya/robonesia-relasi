<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'pelajarans';
    protected $fillable = ['nama'];

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class);
    }
}
