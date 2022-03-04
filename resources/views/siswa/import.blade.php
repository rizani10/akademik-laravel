@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <form action="/siswa/import" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile" name="file">
                </div>
                <button type="submit" class="btn-sm btn-primary">
                    <i class="fas fa-upload"></i>
                    Upload Data
                </button>
            </form>
        </div>
    </div>
    <div style="height: 100vh"></div>
</div>
@endsection