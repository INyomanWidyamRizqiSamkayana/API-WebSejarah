<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function gis_map()
    {
        return view('leaflet.PetaHistori');
    }
}
