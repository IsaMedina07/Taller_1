<?php

namespace App\Http\Controllers;

use App\Models\Departaments;
use Illuminate\Http\Request;

class DepartamentsController extends Controller
{
    public function index()
    {
        $departaments = Departaments::all();
        return response()->json($departaments);
    }

    public function store(Request $request)
    {
        $departament = new Departaments();
        $departament->name = $request->name;
        $departament->save();
        return response()->json('Departament created successfully', 201);
    }

    public function show(Departaments $departaments, string $id)
    {
        $departament = Departaments::find($id);
        return response()->json($departament);
    }

    public function update(Request $request, Departaments $departaments, string $id)
    {
        $departament = Departaments::find($id);
        $departament->name = $request->name;
        $departament->save();
        return response()->json('Departament updated successfully', 200);
    }

    public function destroy(Departaments $departaments, string $id)
    {
        $departament = Departaments::find($id);
        $departament->delete();
        return response()->json('Departament deleted successfully', 200);
    }
}
