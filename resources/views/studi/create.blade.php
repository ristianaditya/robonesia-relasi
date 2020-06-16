@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary">Add Program Studi</div>

            <div class="card-body">
                <form action="{{ route('studi.store') }}" method="POST">
                    <div class="form-group">
                        <label for="name">* Nama Program Studi :</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Studi">
                        @error('nama')<span class="text-danger">{{ $message }}</span>@enderror
                        @csrf
                        <hr>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('studi.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection