<?php

namespace App\Http\Controllers;

use App\Studi;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MahasiswaStoreRequest;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        // dd($mahasiswa);
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $studi = Studi::all();
        return view('mahasiswa.create', compact('studi'));
    }

    public function store(MahasiswaStoreRequest $request)
    {
        $data = $request->validated();

        Mahasiswa::create([
            'nama' => $data['nama'],
            'program_id' => $data['program_id'],
            'user_id' => Auth::id()
        ]);
        return redirect()->route('mahasiswa.index');
    }
}
