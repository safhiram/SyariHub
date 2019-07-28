<?php

namespace App\Http\Controllers;
use App\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function index()
    {
        return view('mitra-massage');
    }
    public function store()
    {
        //yang mau dimasukin
        return redirect()->back();
    }
}
