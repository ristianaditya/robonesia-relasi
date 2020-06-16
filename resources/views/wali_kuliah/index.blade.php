@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-primary">Data Wali Kuliah</div>

            <div class="card-body">
                <h5>Wali Kuliah : <strong>{{ Auth::user()->name }}</strong></h5>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="3">Daftar Mahasiswa</th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Nama Ma</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswa as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data['nama'] }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-outline-success">Update</a>
                                <a href="#" class="btn btn-outline-danger">Delete</a>
                            </td>
                        @empty
                            <td class="text-center" colspan="3">Tidak Ada Data !</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection