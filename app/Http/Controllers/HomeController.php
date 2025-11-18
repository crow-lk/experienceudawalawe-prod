<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ExperienceType;
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

        $experienceTypes = ExperienceType::ordered()
            ->select('id', 'name', 'slug')
            ->get();    

        return view('welcome', compact('experiences', 'experienceTypes'));
    }
}
