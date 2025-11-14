<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // READ - lijst
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    // READ - detail
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    // CREATE - formulier tonen
    public function create()
    {
        return view('employees.create');
    }

    // CREATE - opslaan
    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_code' => 'required|unique:employees,employee_code',
            'full_name' => 'required',
            'role' => 'required',
            'country' => 'required|string|size:2',
        ]);

        Employee::create($validated);

        return redirect()->route('employees.index');
    }

    // UPDATE - formulier tonen
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // UPDATE - opslaan
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'employee_code' => 'required|unique:employees,employee_code,' . $employee->id,
            'full_name' => 'required',
            'role' => 'required',
            'country' => 'required|string|size:2',
        ]);

        $employee->update($validated);

        return redirect()->route('employees.show', $employee);
    }

    // DELETE
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
