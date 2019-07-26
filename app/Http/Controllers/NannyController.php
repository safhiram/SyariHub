<?php

namespace App\Http\Controllers;
use App\Nanny;
use Illuminate\Http\Request;

class NannyController extends Controller
{
    public function index(){
        return view('mitra.nanny');
    }
    public function store(Request $request){
        $nanny = new Nanny;
        $nanny->nama_lengkap=request('nama_lengkap');
        $nanny->tempat_lahir=request('tempat_lahir');
        $nanny->tanggal_lahir=$request->tanggal_lahir;
        $nanny->no_ktp=request('no_ktp');
        $nanny->no_whatsapp=request('no_whatsapp');
        $nanny->alamat_ktp=request('alamat_ktp');
        $nanny->alamat_domisili=request('alamat_domisili');
        $nanny->pendidikan=request('pendidikan');
        $nanny->khatam_AlQuran=request('khatam_AlQuran');
        $nanny->hobi=request('hobi');
        $nanny->jml_anak=request('jml_anak');
        $nanny->pengalaman=request('pengalaman');
        $nanny->penjelasan1=request('penjelasan1');
        $nanny->penjelasan2=request('penjelasan2');
        $nanny->penjelasan3=request('penjelasan3');

        //upload foto
        
    }
    
}
