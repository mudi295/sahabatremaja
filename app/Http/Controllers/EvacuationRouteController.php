<?php

namespace App\Http\Controllers;

use App\Models\EvacuationRoute;

class EvacuationRouteController extends Controller
{
    public function index()
    {
        $routes = EvacuationRoute::where('is_active', true)
            ->get();

        return view('evacuation-routes.index', compact('routes'));
    }
    
    public function show($id)
{
    $route = EvacuationRoute::findOrFail($id);

    return view(
        'evacuation-routes.show',
        compact('route')
    );
}
}