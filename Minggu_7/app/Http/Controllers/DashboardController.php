<?php

namespace App\Http\Controllers;

use App\Models\pe_kerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    
    public function index(){
        // $data = pe_kerja::all();
        return view('backend.dashboard');
    }

    public function pengalamankerja(){
        $data = pe_kerja::all();
        return view('backend.riwayat',compact('data'));
    }

    public function page_tambah(){
        return view('backend.create');
    }

    public function store(Request $request){
        $data =[
             'name'=>$request->name,
            'jabatan'=>$request->jabatan,
            'tahun_masuk'=>$request->tahun_masuk,
            'tahun_keluar'=>$request->tahun_keluar
        ];
         DB::table('pe_kerja')->insert($data);

        return redirect()->route('page_pengalaman-kerja',compact('data'))->with('success', 'Data berhasil diperbarui');
    }

    public function edit($id){
        // dd($id);
        $data = pe_kerja::find($id);
        // dd($data);
        return view('backend.edit',compact('data'));
    }

    public function update(Request $request, $id){
        $data = [
        'name' => $request->name,
        'jabatan' => $request->jabatan,
        'tahun_masuk' => $request->tahun_masuk,
        'tahun_keluar' => $request->tahun_keluar
    ];
    DB::table('pe_kerja')->where('id', $id)->update($data);
    return redirect()->route('page_pengalaman-kerja',compact('data'))->with('success', 'Data berhasil diperbarui');

    }

    public function destroy($id){
        DB::table('pe_kerja')->where('id', $id)->delete();
        return redirect()->route('page_pengalaman-kerja')->with('success', 'Data berhasil dihapus');
    }

}
