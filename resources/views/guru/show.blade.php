@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mt-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" name="nama" value="{{ old('nama', $guru->nama) }}" readonly>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="NIP" name="nip" value="{{ old('nip', $guru->nip) }}" readonly>
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="nuptk" class="form-label">NUPTK</label>
                        <input type="text" class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" placeholder="NUPTK" name="nuptk" value="{{ old('nuptk', $guru->nuptk) }}" readonly>
                        @error('nuptk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-4 mt-3">
                        <label for="jk" class="form-label @error('jk') is-invalid @enderror">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jk" id="" value="{{ old('jk' , $guru->jk) }}" readonly>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ old('tempat_lahir', $guru->tempat_lahir) }}" readonly>
                        @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="tanggal_lahir" value="{{ old('tanggal_lahir', $guru->tanggal_lahir) }}" name="tanggal_lahir" readonly>
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-4 mt-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control @error('alamat') is-invalid @enderror" readonly>{{ old('alamat', $guru->alamat) }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control" name="agama" id="" value="{{ old('agama' , $guru->agama) }}" readonly>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="kepegawaian" class="form-label">Kepegawian</label>
                        <input type="text" class="form-control" value="{{ old('kepegawaian' , $guru->kepegawaian) }}" readonly>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <label for="jenis_ptk" class="form-label">Jenis PTK</label>
                        <input type="text" class="form-control" value="{{ old('jenis_ptk' , $guru->jenis_ptk) }}" readonly>
                    </div>
                    <div class="col-lg-6">
                        <label for="no_hp" class="form-label">No. HP</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp', $guru->no_hp) }}" readonly>
                        @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                
                <div class="mb-3 mt-3">
                    <a href="/guru" class="btn btn-success btn-sm">
                        <i class="fa fa-arrow-left"></i>
                        Kembali
                    </a>
                </div>
                    
            </form>
        </div>
    </div>
    <div style="height: 100vh"></div>
</div>
@endsection