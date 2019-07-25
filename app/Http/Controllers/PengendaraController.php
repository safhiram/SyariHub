<?php

namespace App\Http\Controllers;
use App\Pengendara;
use Illuminate\Http\Request;

class PengendaraController extends Controller
{
    public function index(){
        return view('mitra.pengendara');
    }

    public function store(){
        $pengendara= new Pengendara;
        $pengendara->kota=request('kota');
        $pengendara->alasan=request('alasan');
        $pengendara->darimana=request('darimana');
        $pengendara->jam_kerja=request('jam_kerja');
        $pengendara->nama_lengkap=request('nama_lengkap');

        $tanggal_lahir=$_POST['tanggal_lahir'];
        $tanggal_lahir=date('Y-m-d', strtotime($tanggal_lahir));

        $pengendara->umur=request('umur');
        $pengendara->alamat_domisili=request('alamat_domisili');
        $pengendara->alamat_email=request('alamat_email');
        $pengendara->no_hp=request('no_hp');
        $pengendara->no_ktp=request('no_ktp');
        $pengendara->no_sim=request('no_sim');
        
        $tgl_berlaku_sim=$_POST['tgl_berlaku_sim'];
        $tgl_berlaku_sim=date('Y-m-d', strtotime($tgl_berlaku_sim));

        $pengendara->no_plat=request('no_plat');

        $tgl_berlaku_plat=$_POST['tgl_berlaku_plat'];
        $tgl_berlaku_plat=date('Y-m-d', strtotime($tgl_berlaku_plat));

        $pengendara->pengalaman=request('pengalaman');
        $pengendara->medsos=request('medsos');
        $pengendara->bisa_whatsapp=request('bisa_whatsapp');
        $pengendara->aktivitas=request('aktivitas');
        $pengendara->penghasilan_perbulan=request('penghasilan_perbulan');
        $pengendara->save();

        dd($pengendara);
    }
}
