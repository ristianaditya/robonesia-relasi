<?php

namespace App\Repositories;

use App\Contracts\MahasiswaRepositoryInterface;
use App\Mahasiswa;
use Illuminate\Support\Facades\Auth;

class MahasiswaRepository implements MahasiswaRepositoryInterface
{
    public function index()
    {
        return Mahasiswa::all();
    }

    public function store($data)
    {
        // return Mahasiswa::create([
        //     'nama' => $data['nama'],
        //     'program_id' => $data['program_id'],
        //     'user_id' => Auth::id()
        // ]);

        return Auth::user()->mahasiswa()->create([
            'nama' => $data['nama'],
            'program_id' => $data['program_id'],
        ]);
    }

    public function findByName($nama)
    {
        return Mahasiswa::where('nama', 'LIKE', "%$nama%");
    }
}
