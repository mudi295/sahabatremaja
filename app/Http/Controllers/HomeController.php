<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Program;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Setting;
use App\Models\profile;
use App\Models\Statistic;
use App\Http\Controllers\MaterialController;


class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'setting' => Setting::first(),
            'profile' => profile::first(),
            'articles' => Article::latest()->take(3)->get(),
            'programs' => Program::latest()->take(3)->get(),
            'galleries' => Gallery::latest()->take(8)->get(),
            'teams' => Team::where('is_active', true)
                           ->orderBy('sort_order')
                           ->take(4)
                           ->get(),
            'testimonials' => Testimonial::where('is_active', true)
                                         ->take(6)
                                         ->get(),
            'statistics' => Statistic::where('is_active', true)
                    ->orderBy('sort_order')
                    ->get(),
        ]);
    }
}
