<?php

namespace App\Http\Controllers;

use App\Models\Api_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Api_Controller extends Controller
{
    public function index(){
        $data = DB::table('tes')->get();
        return response()->json($data);
    }

    public function store(Request $request){
        DB::table('tes')->insert([
            'keterangan'=>$request->inputan_keterangan
        ]);
        return response()->json([
            'status'=>true,
            'message'=>'simpan berhasil'
        ]);
    }
    public function update(Request $request, $id){
        DB::table('tes')->where('id',$id) ->update([
            'keterangan'=>$request->inputan_keterangan
        ]);
        return response()->json([
            'status'=>true,
            'message'=>'update succes'
        ]);
    }

    public function delete($id){
        DB::table('tes')->where('id',$id)->delete();
        return response()->json([
            'status'=>true,
            'message'=>'berhasil di hapus'
        ]);
    }

    public function filter(Request $request){
        $keyword = $request -> keyword;
        $data = DB::table('tes')->where('keterangan', 'like','%'.$keyword.'%')->get();

        return response()->json([
            'status'=>true,
            'message'=>'success',
            'data_filter'=>$data
        ]);
    }

    public function index_pagination(){
        $data = DB::table('tes')->paginate(3);
        
        return response()->json([
            'status'=> true,
            'message'=>'succes',
            'data_filter'=>$data
        ]);
    }

    public function index_pagination2($jumlah_data){
        $data =DB::table('tes')->paginate($jumlah_data);

        return response()->json([
        'status'=>true,
        'message'=>'succes',
        'data_filter'=>$data
        ]);
    }
}
