<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return response()->json($employees);
    }

    public function store(Request $request)
    {
        $employee = new Employees();
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->card = $request->card;
        $employee->start_date = $request->start_date;
        $employee->start_contract_date = $request->start_contract_date;
        $employee->position_id = $request->position_id;
        $employee->save();
        return response()->json('Employee created successfully',201);
    }

    public function show(Employees $employees, string $id)
    {
        $employee = Employees::find($id);
        return response()->json($employee);
    }

    public function update(Request $request, Employees $employees, string $id)
    {
        $employee = Employees::find($id);
        $employee->name = $request->name;
        $employee->last_name = $request->last_name;
        $employee->card = $request->card;
        $employee->start_date = $request->start_date;
        $employee->start_contract_date = $request->start_contract_date;
        $employee->position_id = $request->position_id;
        $employee->save();
        return response()->json('Employee updated successfully',200);
    }

    public function destroy(Employees $employees, string $id)
    {
        $employee = Employees::find($id);
        $employee->delete();
        return response()->json('Employee deleted successfully',200);
    }
}
