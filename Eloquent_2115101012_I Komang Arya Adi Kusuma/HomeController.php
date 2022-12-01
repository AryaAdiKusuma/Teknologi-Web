<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
         return view('viewDok.LoginDokter', [
            "title"=> "Login"
        ]);
     }
    public function home(){
        return view('viewDok.Home', [
            "title" => "Home"
        ]);
    }
    public function obat(){
        return view('viewDok.Obat', [
            "title" => "Obat"
        ]);
    }
    public function dokter(){
        return view('viewDok.dokter', [
            "title" => "Dokter"
        ]);
    }
}