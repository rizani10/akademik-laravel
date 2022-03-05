@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>

    <a href="/kelas/create" class="btn btn-sm btn-primary mb-3">
        <i class="fas fa-plus"></i>
        Tambah 
    </a>

    <div class="card mb-5">
        <div class="card-body-lg">
            <div class="card mb-5">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Kelas
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th width="50px">#</th>
                                <th>Kelas</th>
                                <th>Wali Kelas</th>
                                <th width="150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $kls)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $kls->nama_kelas }}</td>
                                    <td>{{ $kls->guru->nama }}</td>
                                    <td>
                                        <a href="/kelas/{{ $kls->id }}" class="btn btn-sm btn-primary" title="Lihat">
                                            <i class="fas fa-eye"></i>
                                        </a>
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