<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create(Request $request){
        $request->session()->put('nama','rizal');
        echo 'data telah di tambahkan';
    }

    public function show(Request $request){
        if ($request-> session()->has('nama')) {
            echo $request->session()->get('nama');
        }else{
            echo 'tidak ada data dalam session';
        }
    }

    public function destroy(Request $request){
        $request->session()->forget('nama');
        echo 'data telah di hapus';
    }
}
