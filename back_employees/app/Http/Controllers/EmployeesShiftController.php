<?php

namespace App\Http\Controllers;

use App\Models\EmployeesShift;
use Illuminate\Http\Request;

class EmployeesShiftController extends Controller
{
    public function index()
    {
        $employeesShifts = EmployeesShift::all();
        return response()->json($employeesShifts);
    }

    public function store(Request $request)
    {
        $employeesShift = new EmployeesShift();
        $employeesShift->shift_start = $request->shift_start;
        $employeesShift->shift_end = $request->shift_end;
        $employeesShift->employee_id = $request->employee_id;
        $employeesShift->save();
        return response()->json('Shift created successfully', 201);
    }

    public function show(EmployeesShift $employeesShift, string $id)
    {
        $employeesShift = EmployeesShift::find($id);
        return response()->json($employeesShift);
    }

    public function update(Request $request, EmployeesShift $employeesShift, string $id)
    {
        $employeesShift = EmployeesShift::find($id);
        $employeesShift->shift_start = $request->shift_start;
        $employeesShift->shift_end = $request->shift_end;
        $employeesShift->employee_id = $request->employee_id;
        $employeesShift->save();
        return response()->json('Shift updated successfully', 201);
    }

    public function destroy(EmployeesShift $employeesShift, string $id)
    {
        $employeesShift = EmployeesShift::find($id);
        $employeesShift->delete();
        return response()->json('Shift deleted successfully', 201);
    }
}
