<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
        {
            return view('login');
        }
    
     public function alumni()
        {
            return view('beranda-alumni');
        }
    
    public function sertifikasi()
        {
            return view('sertifikasi-alumni');
        }

    public function loker()
        {
            return view('loker-alumni');
        }

    public function pelatihan()
        {
            return view('pelatihan-alumni');
        }

    public function ikatanalumni()
        {
            return view('ikatan-alumni');
        }

    public function kuliah()
        {
            return view('kuliah-alumni');
        }
}
