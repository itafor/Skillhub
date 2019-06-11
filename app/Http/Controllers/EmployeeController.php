<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use DB;
class EmployeeController extends Controller
{
    public function index(){
	$emp =Employee::all();
    
    return $emp;
    
    }

    public function getEmployee($Code){
    	$user=Employee::where('Code',$Code)->first();
    	return $user;
    }
}
