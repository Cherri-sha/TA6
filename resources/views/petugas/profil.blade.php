@extends('layouts.app')

@section('title', 'Profil Petugas BPBD')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white fw-bold">
                <i class="fas fa-id-card me-2"></i>Profil Petugas BPBD
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th width="35%">Nama Petugas</th>
                        <td>: {{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <th>Email Petugas</th>
                        <td>: {{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Akun Dibuat</th>
                        <td>: {{ Auth::user()->created_at->translatedFormat('d F Y H:i') }} ({{ Auth::user()->created_at->diffForHumans() }})</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection