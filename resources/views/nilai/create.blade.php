@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary">Add Nilai Mata Kuliah</div>

            <div class="card-body">
                <form action="{{ route('nilai.store') }}" method="POST">
                    <div class="form-group">
                        <label for="mahasiswa_id">* Nama Mahasiswa :</label>
                        <select class="form-control" name="mahasiswa_id" id="mahasiswa_id">
                            <option selected disabled>Pilih Mahasiswa :</option>
                            @foreach ($mahasiswa as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @error('mahasiswa_id')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="pelajaran_id">* Mata Kuliah</label>
                        <select class="form-control" name="pelajaran_id" id="pelajaran_id">
                            <option selected disabled>Pilih Mata Kuliah :</option>
                            @foreach ($matakuliah as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @error('pelajaran_id')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="nilai">* Nama Program Studi :</label>
                        <input type="number" class="form-control" name="nilai" id="nilai" value="{{ old('nilai') }}" placeholder="Masukkan Nilai Mata Kuliah">
                        @error('nilai')<span class="text-danger">{{ $message }}</span>@enderror
                        @csrf
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('nilai.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection