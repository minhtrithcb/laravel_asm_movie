<?php

namespace App\Http\Controllers;

use App\Models\film;
use App\Models\genres;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $genres = genres::all();        
        return view('page.index',["genres" => $genres]);
    }

    public function slug($s)
    {
        $f = film::where('slug', $s)->first();        
        if (!$f) {
            abort(404);
        }

        return dd($f);
        // return view('page.index',["genres" => $genres]);
    }
}
