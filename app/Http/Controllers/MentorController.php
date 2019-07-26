<?php

namespace App\Http\Controllers;
use App\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index(){
        return view('mitra.mentor');
    }
    public function store(Request $request){
        $mentor = new Mentor;
        $mentor->nama_lengkap=request('nama_lengkap');
        $mentor->no_whatsapp=request('no_whatsapp');
        $mentor->tanggal_lahir=$request->tanggal_lahir;
        $mentor->alamat=request('alamat');
        $mentor->pendidikan=request('pendidikan');
        $mentor->khatam_AlQuran=request('khatam_AlQuran');
        $mentor->jml_juz=request('jml_juz');
        $mentor->pengalaman=request('pengalaman');
        $mentor->penjelasan=request('penjelasan');
        $mentor->save();
    }
}
