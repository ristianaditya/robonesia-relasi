<?php

namespace App\Http\Controllers;

use App\Studi;
use Illuminate\Http\Request;
use App\Http\Requests\StudiStoreRequest;

class StudiController extends Controller
{
    public function index()
    {
        $studi = Studi::all();
        return view('studi.index', compact('studi'));
    }

    public function create()
    {
        return view('studi.create');
    }

    public function store(StudiStoreRequest $request)
    {
        $data = $request->validated();

        Studi::create([
            'nama' => $data['nama']
        ]);
        return redirect()->route('studi.index');
    }
}
