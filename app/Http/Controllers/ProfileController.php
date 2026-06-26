<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Mengambil data profil tunggal terbaru
        $Profiles = Profile::latest()->first(); 

        // PERBAIKAN DI SINI:
        // Dari yang sebelumnya 'about.profile', ubah menjadi 'profile.index'
        return view('profile.index', compact('Profiles'));
    }
}