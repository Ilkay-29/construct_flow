<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;

// Home redirect naar projecten
Route::get('/', function () {
    return redirect()->route('projects.index');
});

// CRUD voor Projects
Route::resource('projects', ProjectController::class);

// CRUD voor Employees
Route::resource('employees', EmployeeController::class);
