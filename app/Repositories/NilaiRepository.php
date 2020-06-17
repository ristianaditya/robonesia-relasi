<?php

namespace App\Repositories;

use App\Nilai;

class NilaiRepository
{
    public function store($data)
    {
        return Nilai::create([
            'mahasiswa_id' => $data['mahasiswa_id'],
            'pelajaran_id' => $data['pelajaran_id'],
            'nilai' => $data['nilai']
        ]);
    }
}
