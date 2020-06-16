@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-success">Mata Kuliah</div>

            <div class="card-body">
                <a href="{{ route('mata-kuliah.create') }}" class="btn btn-outline-primary">Add Mata Kuliah</a>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Mata Kuliah</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mataKuliah as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama }}</td>
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