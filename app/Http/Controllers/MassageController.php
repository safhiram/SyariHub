<?php

namespace App\Http\Controllers;
use App\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function index()
    {
        return view('mitra.massage');
    }
    public function store(Request $request)
    {
        $massage= new Massage;
        $massage->nama_lengkap=request('nama_lengkap');
        $massage->tempat_lahir=request('tempat_lahir');
        $massage->tanggal_lahir=$request->tanggal_lahir;
        $massage->jenis_kelamin=request('jenis_kelamin');
        $massage->alamat_ktp=request('alamat_ktp');
        $massage->alamat_tinggal=request('alamat_tinggal');
        $massage->no_ktp=request('no_ktp');
        $massage->pendidikan=request('pendidikan');
        $massage->hp_android=request('hp_android');
        $massage->keahlian=request('keahlian');
        $massage->status=request('status');
        $massage->pengalaman=request('pengalaman');
        $massage->darimana=request('darimana');
        $massage->alasan=request('alasan');
        $massage->jam_kerja=request('jam_kerja');
        $massage->save();
        return redirect()->back();
    }
}
