<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showTugas5() {
        //source untuk data / proses bisnis yg di olah
        return view('tugas5jquery') ;
    }

    function showETS() {
        //source untuk data / proses bisnis yg di olah
        return view('ets') ;
    }

    function showTugasphp() {
        //source untuk data / proses bisnis yg di olah
        return view('tugas6php') ;
    }

    // function showGreetings() {
    //     //source untuk data / proses bisnis yg di olah
    //     return view('showgreetings') ;
    // }

    // function sayHi(Request $request) {
    //     //source untuk data / proses bisnis yg di olah
    //     return view('tugas') ;
    // }

}
