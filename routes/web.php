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

// Route::get('greetings',"ViewController@showGreetings") ;
// Route::post('sayhi',"ViewController@sayHi") ;

