<?php

namespace App\Http\Controllers;

use App\Models\Positions;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    public function index()
    {
        $positions = Positions::all();
        return response()->json($positions);
    }

    public function store(Request $request)
    {
        $position = new Positions();
        $position->name = $request->name;
        $position->hourly_rate = $request->hourly_rate;
        $position->departament_id = $request->departament_id;
        $position->save();
        return response()->json('Position created successfully.', 201);
    }
    public function show(Positions $positions, string $id)
    {
        $position = Positions::find($id);
        return response()->json($position);
    }

    public function update(Request $request, Positions $positions,string $id)
    {
        $position = Positions::find($id);
        $position->name = $request->name;
        $position->hourly_rate = $request->hourly_rate;
        $position->departament_id = $request->departament_id;
        $position->save();
        return response()->json('Position updated successfully.', 200);
    }

    public function destroy(Positions $positions, string $id)
    {
        $position = Positions::find($id);
        $position->delete();
        return response()->json('Position deleted successfully.', 200);
    }
}
