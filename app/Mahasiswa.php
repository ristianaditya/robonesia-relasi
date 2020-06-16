<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = ['nama' , 'program_id' , 'user_id'];

    public function program()
    {
        return $this->belongsTo(Studi::class);
    }
}
