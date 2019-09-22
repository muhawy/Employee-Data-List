<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $employee = new Employee;
        // $employee->name = $request->name;
        // $employee->idn = $request->idn;
        // $employee->email = $request->email;
        // $employee->position = $request->position;

        // $employee->save();

        // Employee::create([
        //     'name' => $request->name,
        //     'idn' => $request->idn,
        //     'email' => $request->email,
        //     'position' => $request->position
        // ]);

        $request->validate([
            'name' => 'required',
            'idn' => 'required|size:9',
            'email' => 'required',
            'position' => 'required'
        ]);

        Employee::create($request->all());
        return redirect('/employees')->with('status', 'Successfully Added Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'idn' => 'required|size:9',
            'email' => 'required',
            'position' => 'required'
        ]);
        
        Employee::where('id', $employee->id)
                ->update([
                    'name' => $request->name,
                    'idn' => $request->idn,
                    'email' => $request->email,
                    'position' => $request->position
                ]);
                return redirect('/employees')->with('status', 'Successfully Update Data');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect('/employees')->with('status', 'Successfully Delete Data');
    }
}
