<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployee;
use App\Models\Patient;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $employees = Employees::orderBy('id','desc')->get();
        return view('backend.admin.employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies=Companies::get();
        return view('backend.admin.employee.create',compact('companies'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:patients,email',
            ],
            [
                'first_name.required' => 'first name is required',
                'last_name.required' => 'last name is required',
                'phone.required' => 'phone number is required',
                'email.required' => 'email is required',
                'company.required' => 'Company must be selected',

            ]);
           Employees::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

            return redirect()->route('admin.employee.index')->with('success','successfully save employee record');
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
        $employee = Employees::find($id);
        $companies=Companies::get();
        return view('backend.admin.employee.edit',compact('employee','companies'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:patients,email',
            ],
            [
                'first_name.required' => 'first name is required',
                'last_name.required' => 'last name is required',
                'phone.required' => 'phone number is required',
                'email.required' => 'email is required',
                'company.required' => 'Company must be selected',

            ]);
        Employees::where('id', $id)
        ->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->copmany,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
            return redirect()->route('admin.employee.index')->with('success','successfully Updated employee record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employees::find($id);
        $employee->delete();
        return redirect()->route('admin.employee.index')->with('delete','successfully Delete employee record');
    }
}
