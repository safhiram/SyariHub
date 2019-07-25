<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NannyController extends Controller
{
    public function index(){
        return view('mitra.nanny');
    }
    public function store(Request $request){
        $nanny = new Nanny;
        $nanny->nama_lengkap=request('nama_lengkap');
        $nanny->no_whatsapp=request('no_whatsapp');
        $nanny->tanggal_lahir=$request->tanggal_lahir;
        $nanny->alamat=request('alamat');
        $nanny->pendidikan=request('pendidikan');
        $nanny->khatam_AlQuran=request('khatam_AlQuran');
        $nanny->jml_juz=request('jml_juz');
        $nanny->pengalaman=request('pengalaman');
        $nanny->penjelasan=request('penjelasan');
        $nanny->save();
    }
}
