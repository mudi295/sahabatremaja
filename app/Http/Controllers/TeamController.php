<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        // Hanya ambil tim yang aktif, diurutkan berdasarkan sort_order, lalu panggil semua data
        $teams = Team::where('is_active', true)
                     ->orderBy('sort_order', 'asc')
                     ->get();

        return view('team.index', compact('teams'));
    }
}