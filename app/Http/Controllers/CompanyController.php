<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
use App\Models\Employees;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::orderBy('id','desc')->get();
        return view('backend.admin.company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.company.create');
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
            'company_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website' => 'required',
            'email' => 'required|email|unique:patients,email',
            ],
            [
                'company_name.required' => 'name is required',
                'email.required' => 'email is required',
                'website.required' => 'webiste is required',

            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('companies_logos'), $imageName);
            $image = $imageName;

             Companies::create([
                'name' => $request->company_name,
                'logo' => $image,
                'email' => $request->email,
                'website' => $request->website,
            ]);

            $email=$request->email;
            $details = [
                'title' => 'Mail from Azea',
                'body' => 'This mail is seting to you to inform that your company is registered here .'
            ];

            \Mail::to($email)->send(new \App\Mail\Companynotification($details));

            return redirect()->route('admin.company.index')->with('success','successfully sent company registration email ');
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
        $company=Companies::find($id);
        return view('backend.admin.company.edit',compact('company'));
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
            'company_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website' => 'required',
            'email' => 'required|email|unique:patients,email',
            ],
            [
                'company_name.required' => 'name is required',
                'email.required' => 'email is required',
                'website.required' => 'webiste is required',

            ]);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('companies_logos'), $imageName);
            $image = $imageName;
        Companies::where('id', $id)
        ->update([
               'name' => $request->company_name,
                'logo' => $image,
                'email' => $request->email,
                'website' => $request->website,
        ]);
            return redirect()->route('admin.company.index')->with('success','successfully Updated company record');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Companies::find($id);
        $company->delete();
        return redirect()->route('admin.employee.index')->with('delete','successfully Delete employee record');
    }
}
