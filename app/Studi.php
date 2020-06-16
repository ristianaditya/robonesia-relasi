<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studi extends Model
{
    protected $table = 'programs';
    protected $fillable = ['nama'];

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class);
    }
}
