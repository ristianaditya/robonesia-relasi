<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaliKuliahController extends Controller
{
    public function index()
    {
        $mahasiswa = Auth::user()->mahasiswa;
        return view('wali_kuliah.index', compact('mahasiswa'));
    }
}
