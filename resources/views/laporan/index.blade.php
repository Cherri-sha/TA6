@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white fw-bold">DAFTAR LAPORAN MASUK (PETUGAS ONLY)</div>
    <div class="card-body">
        <p>Halaman ini berhasil dilindungi oleh <strong>middleware auth</strong>.</p>
        <div class="alert alert-info">
            Hanya petugas BPBD yang sudah login yang bisa melihat halaman ini!
        </div>
    </div>
</div>
@endsection