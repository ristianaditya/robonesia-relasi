@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-success">Add Mata Kuliah</div>

            <div class="card-body">
                <form action="{{ route('mata-kuliah.store') }}" method="POST">
                    <div class="form-group">
                        <label for="name">* Nama Mata Kuliah :</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Mata Kuliah">
                        @error('nama')<span class="text-danger">{{ $message }}</span>@enderror
                        @csrf
                        <hr>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('mata-kuliah.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection