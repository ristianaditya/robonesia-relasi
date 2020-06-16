@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-danger">Add Mahasiswa</div>

            <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                    <div class="form-group">
                        <label for="name">* Nama Mahasiswa :</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Mahasiswa">
                        @error('nama')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="program_id" id="program_id">
                            <option selected disabled>Pilih :</option>
                            @foreach ($studi as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @error('program_id')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    @csrf
                    <hr>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('studi.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection