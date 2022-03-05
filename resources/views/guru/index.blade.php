@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>

    {{-- pesan berhasil --}}
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ session('success') }}
    </div>
    @endif

    <a href="/guru/create" class="btn btn-sm btn-primary mb-3">
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
                                <th width="130px">Aksi</th>
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
                                        <a href="guru/{{ $guru->id }}/edit" class="btn btn-sm btn-warning" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <!-- Button trigger modal -->
                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{ $guru->id }}" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </a>

                                        <a href="guru/{{ $guru->id }}" class="btn btn-sm btn-info" title="Lihat">
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


<!-- Modal -->
@foreach ($gurus as $guru)
    
    <div class="modal fade" id="hapus{{ $guru->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="/guru/{{ $guru->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
        </div>
    </div>
@endforeach
@endsection