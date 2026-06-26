<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Setting;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::latest()->paginate(9);

        return view('programs.index', compact('programs'));
    }

    public function show(Program $program)
    {
        return view('programs.show', compact('program'));
    }

    
}