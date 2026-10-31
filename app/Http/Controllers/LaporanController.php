<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Menampilkan Form Buat Laporan (Bisa diakses Publik/Tanpa Login)
    public function create()
    {
        return view('laporan.create');
    }

    // Menyimpan Data Laporan dari Form
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi'       => 'required|string|max:255',
            'keterangan'   => 'required|string',
        ]);

        // Simpan logika ke database di sini (sesuai Modul 4)

        return back()->with('success', 'Laporan banjir berhasil dikirim!');
    }

    // Menampilkan Daftar Laporan (Halaman Khusus Petugas - Wajib Login)
    public function index()
    {
        return view('laporan.index');
    }
}