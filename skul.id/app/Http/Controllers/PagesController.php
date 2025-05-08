<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login_alumni()
        {
            return view('login-alumni');
        }
    
    public function register_alumni()
        {
            return view('register-alumni');
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

    public function login_mitra()
        {
            return view('login-mitra');
        }
    
     public function mitra()
        {
            return view('beranda-mitra');
        }

    public function register_mitra()
        {
            return view('register-mitra');
        }

    public function sertifikasi_mitra()
        {
            return view('sertifikasi-mitra');
        }

    public function loker_mitra()
        {
            return view('loker-mitra');
        }

    public function pelatihan_mitra()
        {
            return view('pelatihan-mitra');
        }
}
