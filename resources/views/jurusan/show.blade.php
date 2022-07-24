@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts/_flash')
            <div class="card">
                <div class="card-header">
                    Data Jurusan
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Kode Mata Pelajaran</label>
                        <input type="text" class="form-control" name="kode_mapel" value="{{ $jurusan->kode_mapel }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" class="form-control" name="nama_mapel" value="{{ $jurusan->nama_mapel }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Semester</label>
                        <input class="form-control" name="semester" value="{{ $jurusan->semester }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input class="form-control" name="jurusan" value="{{ $jurusan->jurusan }}" readonly>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('jurusan.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection