<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke(Request $request){
        $jobs = Job::with('employer', 'tags')->where('title', 'LIKE', '%'. $request->get('q') . '%')->get();

        return view('jobs.results', ['jobs' => $jobs]);
    }
}
