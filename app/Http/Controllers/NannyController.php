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
        $namanya =  $nanny->nama_lengkap;
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



        //upload foto ktp
        if($request->hasfile('foto_ktp'))
        {
            $file = $request->file('foto_ktp');
            $extension = $file->getClientOriginalExtension();
            $filename= $namanya . '.' . $extension;
            $file->move('nanny/foto_ktp',$filename);
            $nanny->foto_ktp = $filename;
        }
        else
        {
            return $request;
            $nanny->foto_ktp='noimage.jpg';
        }
        //upload foto diri
        if($request->hasfile('foto_diri'))
        {
            $file2 = $request->file('foto_diri');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2= $namanya . '.' . $extension2;
            $file2->move('nanny/foto_diri',$filename2);
            $nanny->foto_diri = $filename2;
        }
        else
        {
            return $request;
            $nanny->foto_diri='noimage.jpg';
        }

        //upload foto ijazah
        if($request->hasfile('foto_ijazah'))
        {
            $file3 = $request->file('foto_ijazah');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3= $namanya . '.' . $extension3;
            $file3->move('nanny/foto_ijazah',$filename3);
            $nanny->foto_ijazah = $filename3;
        }
        else
        {
            return $request;
            $nanny->foto_ijazah='noimage.jpg';
        }

        $nanny->save();

        return redirect()->back();
    }
    
}
