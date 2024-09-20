<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['employees'] = Employee::paginate(10);
        return view('welcome', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:employees',
            'mobile_no' => 'required|numeric|unique:employees',
            'address' => 'required|string',
            'joinning_date' => 'required|date',
            'salary' => 'required|numeric',
            'job_title' => 'required|string',
        ]);

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile_no = $request->mobile_no;
        $employee->address = $request->address;
        $employee->joinning_date = $request->joinning_date;
        $employee->salary = $request->salary;
        $employee->job_title = $request->job_title;
        $employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['employee'] = Employee::find($id);
        return view('edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:employees,email,' . $id,
            'mobile_no' => 'required|numeric|unique:employees,mobile_no,' . $id,
            'address' => 'required|string',
            'joinning_date' => 'required|date',
            'salary' => 'required|numeric',
            'job_title' => 'required|string',
        ]);

        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile_no = $request->mobile_no;
        $employee->address = $request->address;
        $employee->joinning_date = $request->joinning_date;
        $employee->salary = $request->salary;
        $employee->job_title = $request->job_title;
        $employee->save();

        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect()->route('employee.index');
    }
}
