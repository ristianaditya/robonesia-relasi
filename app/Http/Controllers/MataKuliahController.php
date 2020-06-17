<?php

namespace App\Http\Controllers;

use App\Matakuliah;
use Illuminate\Http\Request;
use App\Http\Requests\MataKuliahStoreRequest;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliah = Matakuliah::all();
        return view('mata_kuliah.index', compact('mataKuliah'));
    }

    public function create()
    {
        return view('mata_kuliah.create');
    }

    public function store(MataKuliahStoreRequest $request)
    {
        $data = $request->validated();

        Matakuliah::create([
            'nama' => $data['nama']
        ]);
        return redirect()->route('mata-kuliah.index');
    }
}
