<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use App\Employer;
use App\Education;
use App\Guarantor;
use App\Skill;
use App\Hireme;
use App\Imageproof;
use App\Onlineproof;
use App\Videoproof;
use App\Jobapplication;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $requestedJobs =Employer::all();
            $employers =User::where('role','Employer')->get();
            $applicants =User::where('role','Applicant')->get();
            $userSkill =Skill::where('user_id',Auth::user()->id)->get();
            return view('admindashboard',compact('requestedJobs','employers','applicants','userSkill'));
    }
}
