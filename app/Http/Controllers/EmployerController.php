<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Employer;
use App\Education;
use App\Guarantor;
use App\Skill;
use App\Hireme;
use Auth;
use Mail;
use App\Jobapplication;
class EmployerController extends Controller
{
     public function requestJobseekers() {
      $state_lists= DB::table('state_lgas')
            ->groupBy('state')
            ->get();

    if(auth::user()->role == 'Employer') {
        return view('menialJobSeekers.request-Job-seekers',compact('state_lists'));
        }else{
    return back()->with('errors','Only Employers are allowed to request for job seekers');
    }
}
   public function allEmployers() {
            $allEmployers =User::where('role','Employer')->get();
            return view('employer.allEmployers',compact('allEmployers'));
   }
//store employer requested application
public function storeRequestedJobseekers(Request $request) {

        $this->validate($request,[
            'skillReq' => 'required|max:255',
            'noOfAplicant' => 'required|max:255',
            'companyAddress' => 'required|max:255',
            'compPhone' => 'required|max:255',
            'compEmail' => 'required|max:255',
            'compName' => 'required|max:255',
            'gender' => 'required|max:255',
            'recruitDeadline' => 'required|max:255',
            'state' => 'required|max:255',
            //'lga' => 'required|max:255',
            'jobdescription' => 'required|max:255',
            'jobrequirement' => 'required|max:255',
            'jobresponsibility' => 'required|max:255',
            'jobExpLevel' => 'required|max:255',
            'jobTitle' => 'required|max:255',
            ]);

        if(auth::check()){
       $requestJobseekers                     = new Employer();
       $requestJobseekers->skillReq           = $request->skillReq;
       $requestJobseekers->noOfAplicant       = $request->noOfAplicant;
       $requestJobseekers->companyAddress     = $request->companyAddress;
       $requestJobseekers->compPhone          = $request->compPhone;
       $requestJobseekers->compEmail          = $request->compEmail;
       $requestJobseekers->compName           =  $request->compName;
       $requestJobseekers->gender           =  $request->gender;
       $requestJobseekers->state              = $request->state;
       $requestJobseekers->lga                = $request->lga;
       $requestJobseekers->recruitDeadline    = $request->recruitDeadline;
       $requestJobseekers->jobdescription     = $request->jobdescription;
       $requestJobseekers->jobrequirement     = $request->jobrequirement;
       $requestJobseekers->jobresponsibility  = $request->jobresponsibility;
       $requestJobseekers->jobExpLevel        = $request->jobExpLevel;
       $requestJobseekers->jobTitle           = $request->jobTitle;
       $requestJobseekers->user_id            = auth()->user()->id;
       $requestJobseekers->save();
        $id = $requestJobseekers->id;
        
        if ($requestJobseekers) {

          $userID = auth::user()->id;
          $userName = auth::user()->name;
          $userEmail = auth::user()->email;
          $userPhone = auth::user()->phone;
       $data = array('name'=>$userName,'userID'=>$userID,'requestID'=>$id);
          Mail::send('mailtoEmployer', $data, function($message) use ($userID,$userName,$userEmail,$id) {
         $message->to($userEmail, $userName)->subject
            ('Request submitted');
         $message->from('myskillhub@gmail.com', 'Itafor Francis');
      });



          $detail = array('name'=>$userName,'userID'=>$userID,'requestID'=>$id,'userPhone'=>$userPhone,'userEmail'=>$userEmail);
          Mail::send('requestNotificationToAdmin', $detail, function($message) use ($userID,$userName,$userEmail,$id,$userPhone) {
         $message->to('myskillhub@gmail.com', 'Itafor Francis')->subject
            ('Request From Employer');
         $message->from($userEmail, $userName);
      });

           return back()->with('success','Your request has been sent successfully, Myskillhub will get back to you soon');
              } else {
            return back()->withInput()->with('errors','Request could not be sent due to an unknown error. please try later');
             }
          }
        return view('auth.login');
        }

//get all applicants requested by by employer
 public function  empAppReq () {
  $employerReq = Employer::where('user_id', auth::user()->id)
  ->orderBy('created_at','desc')
  ->paginate(10);
  return view('employer.employerRequest',['employerReq'=>$employerReq]);
 }

public function  viewSpecificEmpReq($id) {
  $viewSpecificEmpReq = Employer::where('id',$id)->first();
  return view('employer.viewSpecificEmpReq',['viewSpecificEmpReq'=>$viewSpecificEmpReq]);
 }


public function  editSpecificEmpReq($id) {
   $state_lists= DB::table('state_lgas')
            ->groupBy('state')
            ->get();

  $editSpecificEmpReq = Employer::where('id',$id)->first();
  return view('employer.editSpecificEmpReq',compact(['state_lists','editSpecificEmpReq']));
 }

  public function updateRequestedJobseekers(Request $request, $id)
    {
      
        $this->validate($request,[
            'skillReq' => 'required|max:255',
            'noOfAplicant' => 'required|max:255',
            'companyAddress' => 'required|max:255',
            'compPhone' => 'required|max:255',
            'compEmail' => 'required|max:255',
            'compName' => 'required|max:255',
            'recruitDeadline' => 'required|max:255',
            'state' => 'required|max:255',
            'lga' => 'required|max:255',
            'jobdescription' => 'required|max:255',
            'jobrequirement' => 'required|max:255',
            'jobresponsibility' => 'required|max:255',
            'jobExpLevel' => 'required|max:255',
            'jobTitle' => 'required|max:255',
            ]);
        $editSpecificEmpReq = Employer::WHERE('id',$id)
        ->update([
            'skillReq'=>$request->input('skillReq'),
            'noOfAplicant'=>$request->input('noOfAplicant'),
            'companyAddress'=>$request->input('companyAddress'),
            'compPhone'=>$request->input('compPhone'),
            'compEmail'=>$request->input('compEmail'),
            'compName'=>$request->input('compName'),
            'gender'=>$request->input('gender'),
            'recruitDeadline'=>$request->input('recruitDeadline'),
            'jobrequirement'=>$request->input('jobrequirement'),
            'state'=>$request->input('state'),
            'lga'=>$request->input('lga'),
            'jobdescription'=>$request->input('jobdescription'),
            'jobresponsibility'=>$request->input('jobresponsibility'),
            'jobExpLevel'=>$request->input('jobExpLevel'),
            'jobTitle'=>$request->input('jobTitle'),
        ]);

        if($editSpecificEmpReq){
         return back()->with('success','Request updated successfully');
        }
        return back()->withInput()->with('errors','Request update failed');
    }


      public function applicationsToThisJob($id) {

         $applicationsToThisJob = Jobapplication::where('job_id', $id)->get();

  return view('employer.applicationsToThisJob',compact(['applicationsToThisJob']));

      }



    public function fetch(Request $request){
    $select = $request->get('select');
    $value = $request->get('value');
    $dependent = $request->get('dependent');
    $data = DB::table('state_lgas')
    ->where($select,$value)
    ->groupBy($dependent)->get();
    $output = '<option value=""> Select'.ucfirst($dependent).'</option>';
     foreach($data as $row){
    $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';

     }
     echo $output;
  }


  public function destroyEmpApplicantReq($id)
    {
        //dd($project);
        $findUrl = Employer::find($id);
        if($findUrl->delete()){
         return  Back()->with('success','Applicant Request deleted successfully');
        }
return back()->with('error',' Applicant Request could not be deleted,Try again');
    
    }
}
