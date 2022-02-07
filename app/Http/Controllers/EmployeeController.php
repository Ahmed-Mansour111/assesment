<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $data = employee::all();
        return view('employee',compact('data'));
    }

    public function addview(){
        return view('create_employee');
    }



    public function create_employee(Request $request){
        $employee = new employee;
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->hire_date = $request->hire_date;
        $employee->save();
        return redirect()->back();
    }
}
