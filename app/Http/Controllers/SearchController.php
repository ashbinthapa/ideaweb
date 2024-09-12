<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\CapacityBuilding;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Get the search query
        $query = $request->input('query');

        // Search in the Activity model
        $activity_results = Activity::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->get();

        // Search in the CapacityBuilding model
        $capacity_results = CapacityBuilding::where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->get();

        // Pass the search results to the view
        return view('search', [
            'query' => $query,
            'activity_results' => $activity_results,
            'capacity_results' => $capacity_results,
        ]);
    }
}
