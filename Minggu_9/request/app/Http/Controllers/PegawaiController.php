<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    
    public function index($nama){
        return $nama;
    }

    public function formulir(){
        return view('formulir');
    }

    public function proses(Request $request){

        $messages=[
            'required'=> 'input :attribute wajib di isi',
            'min'=> 'input :attribute harus diisi minimal :min karakter',
            'max'=> 'input :attribute harus diisi maximal :max karakter'
        ];

        $this->validate($request,[
            'nama'=> 'required|min:5|max:20',
            'alamat'=>'required|alpha'
        ],
        $messages);


        $nama = $request->input('nama');
        $alamat= $request->input('alamat');

        return "Nama:".$nama.",Alamat :".$alamat;
    }
}
