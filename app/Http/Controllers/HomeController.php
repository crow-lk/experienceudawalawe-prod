<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get published experiences for the dropdown, ordered by sort order
        $experiences = Experience::published()
            ->ordered()
            ->select('id', 'title', 'slug')
            ->get();

        return view('welcome', compact('experiences'));
    }
}
