@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <form action="/kelas" method="post">
                @csrf
                    <div class="col-lg-4 mt-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" id="nama_kelas" placeholder="Nama Kelas" name="nama_kelas" value="{{ old('nama_kelas') }}">
                        @error('nama_kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="guru_id" class="form-label @error('guru_id') is-invalid @enderror">Wali Kelas</label>
                        <select name="guru_id" id="guru_id" class="theSelect form-control">
                            <option value="null" selected disabled>--Silahkan Pilih--</option>
                            @foreach ($gurus as $guru)
                                <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                
                <button type="submit" class="btn-sm btn-primary mb-4 mt-3">
                    <i class="fa fa-save"></i>
                    Simpan
                </button>
            </form>
        </div>
    </div>
    <div style="height: 100vh"></div>
</div>
@endsection