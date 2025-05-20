<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crud = Crud::get();
        return view('crud.index', ['crud' => $crud]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'old' => 'required|integer',
            'description' => 'required|string',
            'show' => 'required |in:1,0',
            'status' => 'required|in:enable, disable'
        ]);

        $crud = Crud::create($validated);
        return response()->json($crud, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $crud = Crud::get();
        return view('crud.show', ['crud' => $crud]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud = Crud::findOrFail($id);
        return view('crud.edit', compact('crud'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'old' => 'required|integer',
            'description' => 'required|string',
            'show' => 'required|in:1,0',
            'status' => 'required|in:enable,disable',
        ]);

        $crud = Crud::findOrFail($id);
        $crud->update($validated);

        return redirect()->route('crud.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = Crud::findOrFail($id);
        $crud->delete();

        return response()->json(['message' => 'Record deleted successfully.']);
    }
}
