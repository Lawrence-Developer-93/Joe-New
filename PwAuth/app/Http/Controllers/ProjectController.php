<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\User;

class ProjectController extends Controller
{
    public function index() {
        // $name = User::find('name')->get();
        // $user = User::first('name')->first();
        $project = Project::where('user_id', Auth::id())->get();
        
        // return $project;

        if ($project->count() == null) {
            return view('account/projects/new');
            // return view('account/projects/new');
        } else if($project->count() !== null) {
            return view('account/projects/index', compact('project'));
            
            // return $project;
           
        }

        return view('account/projects/index', compact('project'));
        // return "wtf";
        // return $project;
        
    }

    public function create() {
        
        return view('account/projects/create');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required|max:255'
        ]);

        
        $project = new Project;

        $project::create([
            'title' => $request->title,
            'user_id' => Auth::id()
        ]);

        // return '$project;';
        
        return redirect('account/projects');
    }

    public function show($id) {
        $project = Project::where('id', $id)->first();

        return view('account/projects/show', compact('project'));
    }

    public function edit($id) {
        $project = Project::where('id', $id)->first();
        // return $project;

        return view('account/projects/edit', compact('project'));
    }

    public function update(Request $request, $id) {
        
        Project::where('id', $id)->where('user_id', Auth::id())->update(['title' => $request->title]);
       

        return redirect('account/projects');
    }

    public function destroy($id) {
        $project = Project::where('id', $id)->first();
        $project->deleteRelated();

        return redirect('account/projects');
    }
}
