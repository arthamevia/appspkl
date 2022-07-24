@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Niswa
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <input type="text" class="form-control " name="nis" value="{{ $nilai->nis }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kode Mata Pelajaran</label>
                        <input type="text" class="form-control " name="kode_mata_pelajaran" value="{{ $nilai->kode_mata_pelajaran }}"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nilai</label>
                        <textarea class="form-control" name="nilai"
                            readonly>{{ $nilai->nilai }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Grade</label>
                        <input type="text" class="form-control" name="indeks_nilai" value="{{ $nilai->indeks_nilai }}"
                            readonly>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid gap-2">
                            <a href="{{ route('nilai.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection