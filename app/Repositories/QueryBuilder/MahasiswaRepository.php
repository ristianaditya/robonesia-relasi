<?php

namespace App\Repositories\QueryBuilder;

use App\Contracts\MahasiswaRepositoryInterface;
use Illuminate\Support\Facades\DB;

class MahasiswaRepository implements MahasiswaRepositoryInterface
{
    public function index() {
        // $data = DB::table('mahasiswas')->get();
        // dd($data);

        return DB::table('mahasiswas')->get();
    }

    public function store($data)
    {
        # code...
    }
}
