<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(4);
        return response()->json($projects);
    }

    public function show($slug)
    {
        $projects = Project::where('slug', $slug)->with(['type', 'technologies'])->first();
        return response()->json($projects);


    }
}
