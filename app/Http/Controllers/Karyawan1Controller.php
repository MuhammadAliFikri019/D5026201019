<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Karyawan1Controller extends Controller
{
    public function index()
    {
        // mengambil data dari table karyawan1
        $karyawan1 = DB::table('karyawan1')->paginate(3);
        // mengirim data pegawai ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]); //passing value bisa lebih dari 1

    }
    // method untuk edit data karyawan1
    public function edit($id)
    {
        // mengambil data karyawan1 berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data karyawan1 yang didapat ke view edit.blade.php
        return view('karyawan1.edit', ['karyawan1' => $karyawan1]);
    }
    public function view($id)
    {
        // mengambil data karyawan1 berdasarkan id yang dipilih
        $karyawan1 = DB::table('karyawan1')->where('NIP', $id)->get();
        // passing data karyawan1 yang didapat ke view edit.blade.php
        return view('karyawan1.detail', ['karyawan1' => $karyawan1]);
    }

    // update data karyawan1
    public function update(Request $request)
    {
        // update data karyawan1
        DB::table('karyawan1')->where('NIP', $request->id)->update([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji,
        ]);
        // alihkan halaman ke halaman karyawan1
        return redirect('/karyawan1');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table karyawan1 sesuai pencarian data
        $karyawan1 = DB::table('karyawan1')
            ->Where('Nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data karyawan1 ke view index
        return view('karyawan1.index', ['karyawan1' => $karyawan1]);
    }
}
