@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>

    <a href="" class="btn btn-sm btn-primary mb-3">
        <i class="fas fa-plus"></i>
        Tambah 
    </a>

    <div class="card mb-5">
        <div class="card-body-lg">
            <div class="card mb-5">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Guru
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>NUPTK</th>
                                <th>Jenis Kelamin</th>
                                <th>No. Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gurus as $guru)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $guru->nama }}</td>
                                    <td>{{ $guru->nip }}</td>
                                    <td>{{ $guru->nuptk }}</td>
                                    <td>{{ $guru->jk }}</td>
                                    <td>{{ $guru->no_hp }}</td>
                                    <td>
                                        <a href="guru/{{ $guru->id }}/edit" class="btn btn-sm btn-primary" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 100vh"></div>
</div>
@endsection