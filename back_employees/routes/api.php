<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentsController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\EmployeesShiftController;

// OPERACIOINES CRUD DE DEPARTAMENTOS:
Route::get('/departaments', [DepartamentsController::class, 'index']);
Route::post('/departaments', [DepartamentsController::class, 'store']);
Route::get('/departaments/{id}', [DepartamentsController::class, 'show']);
Route::put('/departaments/{id}', [DepartamentsController::class, 'update']);
Route::delete('/departaments/{id}', [DepartamentsController::class, 'destroy']);

// OPERACIONES CRUD DE POSICIONES:
Route::get('/positions',[PositionsController::class, 'index']);
Route::post('/positions',[PositionsController::class, 'store']);
Route::get('/positions/{id}',[PositionsController::class, 'show']);
Route::put('/positions/{id}',[PositionsController::class, 'update']);
Route::delete('/positions/{id}',[PositionsController::class, 'destroy']);

//OPERACIONES CRUD DE EMPLEADOS:
Route::get('/employees',[EmployeesController::class, 'index']);
Route::post('/employees',[EmployeesController::class, 'store']);
Route::get('/employees/{id}',[EmployeesController::class, 'show']);
Route::put('/employee/{id}',[EmployeesController::class, 'update']);
Route::delete('/employees/{id}',[EmployeesController::class, 'destroy']);

//OPERACIONES CRUD DE LOS TURNOS DE EMPLEADOS:
Route::get('/employeeShifts',[EmployeesShiftController::class, 'index']);
Route::post('/employeeShifts',[EmployeesShiftController::class, 'store']);
Route::get('/employeeShifts/{id}',[EmployeesShiftController::class, 'show']);
Route::put('/employeeShifts/{id}',[EmployeesShiftController::class, 'update']);
Route::delete('/employeeShifts/{id}',[EmployeesShiftController::class, 'destroy']);
