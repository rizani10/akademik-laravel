@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <h6>{{ $kelas->nama_kelas }}</h6>
        </div>
    </div>
    <div style="height: 100vh"></div>
</div>
@endsection