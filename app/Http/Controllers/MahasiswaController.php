<?php

namespace App\Http\Controllers;

use App\Contracts\MahasiswaRepositoryInterface;
use App\Studi;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MahasiswaStoreRequest;
use App\Repositories\MahasiswaRepository;

class MahasiswaController extends Controller
{
    private $mahasiswaRepository;

    public function __construct(MahasiswaRepositoryInterface $mahasiswaRepo) {
        $this->mahasiswaRepository = $mahasiswaRepo;
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaRepository->index();
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

        $this->mahasiswaRepository->store($data);

        return redirect()->route('mahasiswa.index');
    }
}
