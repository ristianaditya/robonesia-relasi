<?php

namespace App\Contracts;

interface MahasiswaRepositoryInterface
{
    public function index();

    public function store($data);
}
