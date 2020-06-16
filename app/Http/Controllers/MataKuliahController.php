<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use Illuminate\Http\Request;
use App\Http\Requests\MataKuliahStoreRequest;

class MataKuliahController extends Controller
{
    public function index()
    {
        $mataKuliah = MataKuliah::all();
        return view('mata_kuliah.index', compact('mataKuliah'));
    }

    public function create()
    {
        return view('mata_kuliah.create');
    }

    public function store(MataKuliahStoreRequest $request)
    {
        $data = $request->validated();

        MataKuliah::create([
            'nama' => $data['nama']
        ]);
        return redirect()->route('mata-kuliah.index');
    }
}
