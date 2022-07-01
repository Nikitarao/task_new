<?php

namespace App\Http\Controllers;

use App\Lib\Cozy\Shopify\ApiHelper\ShopifyGraphqlApihelper;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return json_encode($employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        $company=company::all();
        return json_encode($employees,$company);
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
            'f_name'=> 'required',
            'l_name'=> 'required',
        ]);
        $employee =new Employee;
        $employee->f_name =$request->get('f_name');
        $employee->l_name =$request->get('l_name');
        $employee->company =$request->get('company');
        $employee->email =$request->get('email');
        $employee->phone =$request->get('phone_number');
        $employee->save();
        return ['msg'=>'data have been saved','status'=>200];
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
        $employee = Employee::find($id);
        $company_details =Company::all('name','id');
        return view('employee.edit',['company_details'=>$company_details,'employee'=>$employee]);
    }
  public function editdata(Request $request){
        $employee = Employee::find($request->id);

        return $employee;
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
        $request -> validate([
            'f_name' => 'required',
            'l_name' => 'required',

        ]);
        $employee = Employee::find($id);
        $employee -> f_name = $request -> f_name;
        $employee -> l_name = $request -> l_name;
        $employee -> email = $request -> email;
        $employee -> phone = $request -> phone;
        $employee -> company = $request -> company;

        $employee -> save();

        return redirect()->route('dashboard');
    }
    public function editdatasave(Request $request)
    {
      $employee = Employee::find($request->id);

        $employee->f_name = $request->f_name;
        $employee->l_name = $request->l_name;
        $employee->email = $request->email;
        $employee->phone = $request->phone_number;
        $employee->company = $request->company;

        $employee->save();

        return ['msg'=>'data save successfully'];
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
        $employee -> delete();
        return redirect()->route('dashboard');
    }
    public function delete(Request $request)
    {
        $employee = Employee::find($request->id);
        $employee -> delete();
        return ['msg'=>'data delete successfully'];
    }
}
