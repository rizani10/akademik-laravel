@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <form action="/guru" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4 mt-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="NIP" name="nip" value="{{ old('nip') }}">
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="nuptk" class="form-label">NUPTK</label>
                        <input type="text" class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" placeholder="NUPTK" name="nuptk" value="{{ old('nuptk') }}">
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
                        <select name="jk" id="jk" class="form-control">
                            <option value="Laki-laki">--Silahkan Pilih--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="tanggal_lahir" value="{{ old('tanggal_lahir') }}" name="tanggal_lahir">
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
                        <textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control @error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select name="agama" id="agama" class="form-control @error('agama') is-invalid @enderror">
                            <option value="Islam">--Silahkan Pilih--</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mt-3">
                        <label for="kepegawaian" class="form-label">Kepegawian</label>
                        <select name="kepegawaian" id="kepegawaian" class="form-control @error('kepegawaian') is-invalid @enderror">
                            <option value="PNS">--Silahkan Pilih--</option>
                            <option value="PNS">PNS</option>
                            <option value="Tenaga Honor">Tenaga Honor</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-6">
                        <label for="jenis_ptk" class="form-label">Jenis PTK</label>
                        <select name="jenis_ptk" id="jenis_ptk" class="form-control @error('jenis_ptk') is-invalid @enderror">
                            <option value="Guru Mapel">--Silahkan Pilih--</option>
                            <option value="Guru Mapel">Guru Mapel</option>
                            <option value="Guru BK">Guru BK</option>
                            <option value="Tenaga Administrasi Sekolah">Tenaga Administrasi Sekolah</option>
                            <option value="Penjaga Sekolah">Penjaga Sekolah</option>
                            <option value="Office Boy">Office Boy</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <label for="no_hp" class="form-label">No. HP</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control @error('no_hp') is-invalid @enderror" value="{{ old('no_hp') }}">
                        @error('no_hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
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