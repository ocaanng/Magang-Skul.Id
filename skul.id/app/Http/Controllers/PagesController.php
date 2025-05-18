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

    public function profile_alumni()
        {
            return view('profile-alumni');
        }

    public function edit_profile_alumni()
        {
            return view('edit-profile-alumni');
        }

    public function ikatanalumni()
        {
            return view('ikatan-alumni');
        }

    public function kuliah()
        {
            return view('kuliah-alumni');
        }

    public function artikel_alumni()
        {
            return view('artikel-alumni');
        }

    public function ebook_alumni()
        {
            return view('ebook-alumni');
        }

    public function jelajah_alumni()
        {
            return view('jelajah-alumni');
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

    public function data_user_mitra()
        {
            return view('profile-user-mitra');
        }
    
    public function login_siswa()
        {
            return view('login-siswa');
        }
}
