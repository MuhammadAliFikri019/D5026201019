<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LaptopController extends Controller
{
    public function index()
    {
        // mengambil data dari table laptop
        $laptop = DB::table('laptop')->paginate(3);
        // mengirim data pegawai ke view index
        return view('laptop.index', ['laptop' => $laptop]); //passing value bisa lebih dari 1

    }
    // method untuk menampilkan view form tambah laptop
    public function tambah()
    {

        // memanggil view tambah
        return view('laptop.tambah');
    }
    // method untuk insert data ke table laptop
    public function store(Request $request)
    {
        // insert data ke table laptop
        DB::table('laptop')->insert([
            'merklaptop' => $request->merklaptop,
            'stocklaptop' => $request->stocklaptop,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman laptop
        return redirect('/laptop');
    }
    // method untuk edit data laptop
    public function edit($id)
    {
        // mengambil data laptop berdasarkan id yang dipilih
        $laptop = DB::table('laptop')->where('kodelaptop', $id)->get();
        // passing data laptop yang didapat ke view edit.blade.php
        return view('laptop.edit', ['laptop' => $laptop]);
    }
    public function view($id)
    {
        // mengambil data laptop berdasarkan id yang dipilih
        $laptop = DB::table('laptop')->where('kodelaptop', $id)->get();
        // passing data laptop yang didapat ke view edit.blade.php
        return view('laptop.detail', ['laptop' => $laptop]);
    }

    // update data laptop
    public function update(Request $request)
    {
        // update data laptop
        DB::table('laptop')->where('kodelaptop', $request->id)->update([
            'merklaptop' => $request->merklaptop,
            'stocklaptop' => $request->stocklaptop,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman laptop
        return redirect('/laptop');
    }
    // method untuk hapus data laptop
    public function hapus($id)
    {
        // menghapus data laptop berdasarkan id yang dipilih
        DB::table('laptop')->where('kodelaptop', $id)->delete();

        // alihkan halaman ke halaman laptop
        return redirect('/laptop');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table laptop sesuai pencarian data
        $laptop = DB::table('laptop')
            ->Where('merklaptop', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data laptop ke view index
        return view('laptop.index', ['laptop' => $laptop]);
    }
}
