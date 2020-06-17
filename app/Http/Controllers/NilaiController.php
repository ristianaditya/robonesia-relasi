<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Matakuliah;
use Illuminate\Http\Request;
use App\Http\Requests\NilaiStoreRequest;

class NilaiController extends Controller
{
    public function index()
    {
        // $nilai = Mahasiswa::all();
        return view('nilai.index');
    }

    public function create()
    {
        $matakuliah = Matakuliah::all();
        $mahasiswa = Mahasiswa::all();
        return view('nilai.create' , compact('matakuliah' , 'mahasiswa'));
    }

    public function store(NilaiStoreRequest $request)
    {
        $data = $request->validated();

        Nilai::create([
            'mahasiswa_id' => $data['mahasiswa_id'],
            'pelajaran_id' => $data['pelajaran_id'],
            'nilai' => $data['nilai']
        ]);
        return redirect()->route('nilai.index');
    }
}
