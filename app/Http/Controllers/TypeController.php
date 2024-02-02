<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Type;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function validation($data)
     {

        $validated = Validator::make($data, [
            "name"=> "required|min:5|max:50",
            "description"=> "required|min:5|max:300",
            ])->validate();

            return $validated;
    } 
    public function index()
    {
        $types= Type::all();
        return view("admin.types.index",compact("types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types=Type::all();
        return view("admin.types.create", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeRequest $request)
    {
        $validati = $request->validated();

        $newType = new Type();
        $newType->fill($validati);
        $newType->save();

        // return redirect()->route("admin.projects.show", $newPost->id);
        return redirect()->route("admin.types.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type = Type::find($id);
        return view('admin.types.show', compact('type'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeRequest $request, Type $type)
    {
        $data =$request ->all();

        $dati_validati =$this->validation($data);
    
        $type->update($dati_validati);

        return redirect()->route('admin.types.show', $type->id);



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.types.index');
    }
}
