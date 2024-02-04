<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\Validator;


class ProjectController extends Controller
{
    
    public function validation($data)
     {

        $validated = Validator::make($data, [
            "name"=> "required|min:5|max:50",
            "description"=> "required|min:5|max:300",
            "image"=> "required|min:5|max:300",
            "dataCreation"=> "required|min:5|max:100",
            "language"=> "required|min:3|max:200",
            "type_id"=> "nullable",
            

            ])->validate();

            return $validated;
    }  
    public function index()
    {
        $projects = Project::all();
        $technologies = Technology::all();
        return view('admin.projects.index', compact('projects', 'technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.projects.create', compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $validati = $request->validated();

        $newProject = new Project();
        $newProject->fill($validati);
        $newProject->save();

        // return redirect()->route("admin.projects.show", $newPost->id);
        return redirect()->route("admin.projects.index");
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project = Project::find($id);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    { 
        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project','types', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, Project $project)
    {
        {
            $data =$request ->all();
    
            $dati_validati =$this->validation($data);
    
            $project->update($dati_validati);

    
            return redirect()->route('admin.projects.show', $project->id);
    
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
