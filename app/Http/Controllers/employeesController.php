<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("Ini Index");
        $employees=Employees::All();
        return view('/employees/index',['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd("Saya");
        return view('/employees/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd("Ini Store");
        $employees=$this->validate($request,[
            'nip'=>'required|max:5',
            'name'=>'required',
            'division_id'=>'required|max:5',
            'company_id'=>'required|max:5',
            'position_id'=>'required|max:5',
            'address'=>'required',
            'date_of_birth'=>'required',
            'join_date'=>'required',
            'status'=>'required',
            'npwp'=>'required',
            'ktp'=>'required',
            'marital_status'=> 'required',
            'phone_number'=>'required',
            'profile_img'=>'required'
        ]);
        DB::table('employees')->insert($employees);
        return redirect('/employees');

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
        $employees=DB::table('employees')->where('id',$id)->first();
        return view('employees/edit',['employees'=>$employees]);
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
       $employees=$this->validate($request,[
            'nip'=>'required|max:5',
            'name'=>'required',
            'division_id'=>'required|max:5',
            'company_id'=>'required|max:5',
            'position_id'=>'required|max:5',
            'address'=>'required',
            'date_of_birth'=>'required',
            'join_date'=>'required',
            'status'=>'required',
            'npwp'=>'required',
            'ktp'=>'required',
            'marital_status'=> 'required',
            'phone_number'=>'required',
            'profile_img'=>'required'
        ]);
        DB::table('employees')->where('id',$id)->update($employees);
        return redirect('/employees');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees=Employees::onlyTrashed()->where('id',$id);
        $employees->forcedelete();
        return redirect('/employees');
    }
    public function delete($id){
        $employees = Employees::find($id);
        $employees->delete();
        return redirect('/employees');
    }
    public function bin(){
        $employees=Employees::onlyTrashed()->get();
        return view('/employees/bin',['employees'=>$employees]);
    }
    public function rollback($id){
        $employees=Employees::onlyTrashed()->where('id',$id);
        $employees->restore();
        return redirect('/employees/bin');
    }
}
