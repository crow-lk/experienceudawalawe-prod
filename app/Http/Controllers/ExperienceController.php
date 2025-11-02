<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ExperienceType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ExperienceController extends Controller
{
    public function index(Request $request)
    {
        $selectedTypeSlug = $request->query('type');
        $selectedType = $selectedTypeSlug
            ? ExperienceType::where('slug', $selectedTypeSlug)->first()
            : null;

        $experiencesQuery = Experience::published()
            ->with('experienceType')
            ->ordered();

        if ($selectedType) {
            $experiencesQuery->where(function ($query) use ($selectedType) {
                $query->where('experience_type_id', $selectedType->id)
                    ->orWhere(function ($subQuery) use ($selectedType) {
                        $subQuery->whereNull('experience_type_id')
                            ->whereRaw('LOWER(type) = ?', [Str::lower($selectedType->name)]);
                    });
            });
        } elseif ($selectedTypeSlug) {
            $experiencesQuery->whereRaw('1 = 0');
        }

        $experiences = $experiencesQuery
            ->paginate(9)
            ->withQueryString();

        $experienceTypes = ExperienceType::active()
            ->ordered()
            ->get();

        return view('experiences.index', [
            'experiences' => $experiences,
            'experienceTypes' => $experienceTypes,
            'selectedType' => $selectedType,
            'requestedTypeSlug' => $selectedTypeSlug,
            'activeTypeSlug' => $selectedType?->slug,
        ]);
    }

    public function show(string $slug)
    {
        $experience = Experience::published()
            ->where('slug', $slug)
            ->firstOrFail();

        return view('experiences.show', compact('experience'));
    }
}
