<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function index()
   {
        return view('projects.index', [
            'projects' => Project::all(),
            'tags' => Tag::all(),
        ]);
   }
}
