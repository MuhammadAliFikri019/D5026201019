<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4js') ;
});

Route::get('praktikum2', function () {
    return view('praktikum2js') ;
});

//melalui controller
Route::get('tugas5jq',"ViewController@showTugas5") ;

Route::get('ets2021',"ViewController@showETS") ;

Route::get('tugaske6php',"ViewController@showTugasphp") ;

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

// Route::get('greetings',"ViewController@showGreetings") ;
// Route::post('sayhi',"ViewController@sayHi") ;

//route CRUD
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');
Route::get('/pendapatan/detail/{id}','PendapatanController@view');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/detail/{id}','AbsenController@view');

Route::get('/laptop','LaptopController@index');
Route::get('/laptop/tambah','LaptopController@tambah');
Route::post('/laptop/store','LaptopController@store');
Route::get('/laptop/edit/{id}','LaptopController@edit');
Route::post('/laptop/update','LaptopController@update');
Route::get('/laptop/hapus/{id}','LaptopController@hapus');
Route::get('/laptop/cari','LaptopController@cari');
Route::get('/laptop/detail/{id}','LaptopController@view');

Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/cari','Karyawan1Controller@cari');
Route::get('/karyawan1/detail/{id}','Karyawan1Controller@view');
