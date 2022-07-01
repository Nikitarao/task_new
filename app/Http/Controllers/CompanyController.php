<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Http\Requests\StorecompanyRequest;
use App\Http\Requests\UpdatecompanyRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_details = company::all();
        return view('company.index',compact('company_details'));
    }
    public function company_table(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = company::all();
        return json_encode($company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
        ]);
        $company =new Company;

        if($request->file('image')){

            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $company->image= $filename;
        }
        $company->name =$request->get('name');
        $company->email =$request->get('email');
        $company->website =$request->get('website');

        $company->save();
        return ['msg'=>'data have been saved','status'=>200];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $company_details =Company::find($id);
        return view('company.edit',['company_details'=>$company_details,'employee'=>$employee]);
    }
    public function editCompany(Request $request){
        $company = company::find($request->id);
        return $company;
    }
    public function editCompanySave(Request $request)
    {
        $company = company::find($request->id);

        $company -> name = $request -> name;
        $company -> email = $request -> email;
        $company -> website = $request -> website;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $company->image= $filename;
        }
        $company->save();

        return ['msg'=>'data save successfully'];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecompanyRequest  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
        ]);
        $company = new company;
        $company -> name = $request -> name;
        $company -> email = $request -> email;
        $company -> website = $request -> website;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $company->image= $filename;
        }

        $company -> save();

        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = company::find($id);
        $company -> delete();
        return redirect()->route('company.index');
    }

    public function deleteCompany(Request $request)
    {
        $company = company::find($request->id);
        $company -> delete();
        return ['msg'=>'data delete successfully'];
    }
}
