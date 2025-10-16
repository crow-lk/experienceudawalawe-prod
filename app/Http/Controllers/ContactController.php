<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $selectedExperience = null;
        
        // If experience parameter is provided, try to find the experience
        if ($request->has('experience')) {
            $experienceSlug = $request->get('experience');
            $selectedExperience = Experience::published()
                ->where('slug', $experienceSlug)
                ->first();
        }

        // Pre-fill form data from the booking form
        $formData = [
            'preferred_date' => $request->get('preferred_date'),
            'adults' => $request->get('adults'),
            'children' => $request->get('children'),
            'promo' => $request->get('promo'),
        ];

        return view('contact', compact('selectedExperience', 'formData'));
    }
}
