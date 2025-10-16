<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::published()
            ->ordered()
            ->paginate(9);

        return view('experiences.index', compact('experiences'));
    }

    public function show(string $slug)
    {
        $experience = Experience::published()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('experiences.show', compact('experience'));
    }
}
