<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
        $query = Material::where('is_active', true);

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        $materials = $query->latest()->paginate(9);

        return view('materials.index', compact('materials'));
    }

    public function show($slug)
    {
        $material = Material::where('slug', $slug)
            ->firstOrFail();

        return view('materials.show', compact('material'));
    }

    public function videos()
{
    $materials = Material::where('type', 'video')
        ->where('is_active', true)
        ->latest()
        ->paginate(9);

    return view('materials.videos', compact('materials'));
}
}