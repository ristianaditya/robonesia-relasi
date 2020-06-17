<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Matakuliah;
use Illuminate\Http\Request;
use App\Http\Requests\NilaiStoreRequest;
use App\Repositories\MahasiswaRepository;
use App\Repositories\NilaiRepository;

class NilaiController extends Controller
{
    private $mahasiswaRepository;
    private $nilaiRepository;

    public function __construct(MahasiswaRepository $mahasiswaRepo, NilaiRepository $nilaiRepo) {
        $this->mahasiswaRepository = $mahasiswaRepo;
        $this->nilaiRepository = $nilaiRepo;
    }

    public function index()
    {
        // $nilai = Mahasiswa::all();
        return view('nilai.index');
    }

    public function create()
    {
        $matakuliah = Matakuliah::all();
        $mahasiswa = $this->mahasiswaRepository->index();

        return view('nilai.create' , compact('matakuliah' , 'mahasiswa'));
    }

    public function store(NilaiStoreRequest $request)
    {
        $data = $request->validated();

        $this->nilaiRepository->store($data);
        
        return redirect()->route('nilai.index');
    }
}
