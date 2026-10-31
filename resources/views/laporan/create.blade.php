@extends('layouts.app')

@section('title', 'Buat Laporan Banjir')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white fw-bold">FORM LAPOR BANJIR - BPBD</div>
            <div class="card-body">
                <form method="POST" action="{{ route('laporan.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Pelapor</label>
                        <input type="text" name="nama_pelapor" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi Kejadian</label>
                        <input type="text" name="lokasi" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan / Kondisi Banjir</label>
                        <textarea name="keterangan" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Laporan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection