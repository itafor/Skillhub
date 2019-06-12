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
use Mail;
use App\Sharedjob;
class AdminController extends Controller
{
    public function applicantRequested($id) {
        $users = User::where('id',$id)->first();
        return view('admin.applicantRequested',compact(['users']));
    }

    public function empRequest() {
    	$requestedApplicants = Hireme::all();
        return view('admin.requestedApplicants',compact(['requestedApplicants']));
    }
    public function deleteReq($id) {
    	 $findid = Hireme::find($id);
        if($findid->delete()){
         return  Back()->with('success','Employer request deleted successfully');
        }
return back()->with('error','Employer request could not deleted');
    
    }
    
    public function  adminViewEmpAppReq () {
  $employerReq = DB::table('employers')
  ->orderBy('created_at','desc')
  ->paginate(10);
  return view('employer.employerRequest',['employerReq'=>$employerReq]);
 }

 public function approveSpecificEmpReq($id)
    {

        $approve = Employer::WHERE('id', $id)
        ->update([
            'status'=>'Approved',
        ]);

        if($approve){
         return back()->with('success','You have successfully Approved this request');
        }
        return back()->withInput()->with('errors','An attempt to approve this Request failed');
    }

    
    public function disapproveSpecificEmpReq($id)
    {

        $approve = Employer::WHERE('id', $id)
        ->update([
            'status'=>'Pending',
        ]);

        if($approve){
         return back()->with('success','You have successfully disapproved this request');
        }
        return back()->withInput()->with('errors','An attempt to disapprove this Request failed');
    }



 public function shareJobToApplicants ($id) {
    $job =Sharedjob::where('job_id',$id)->first();
   if($job){
return back()->with('errors','You have already shared this job');
   }
        $applicants = User::where('role','Applicant')->get();
        $getJob = Employer::find($id);
        $skillsReq = $getJob->skillReq;
        $userID = $getJob->user_id;

        $jobReq = $getJob->jobrequirement;
        $jobResp = $getJob->jobresponsibility;
        $companyName = $getJob->compName;
        $jobTitle = $getJob->jobTitle;

        foreach ($applicants as $app) {

                $applicantName= $app->name;
                $applicantEmail = $app->email;

              $data = array('name'=>$applicantName, 'email'=>$applicantEmail, 'jobID'=>$id,
                'skillsReq'=>$skillsReq,'jobResp'=>$jobResp,'jobReq'=>$jobReq,'jobTitle'=>$jobTitle,);
          Mail::send('mailAvailableJobs', $data, function($message) use ($id,$applicantName,$applicantEmail,$skillsReq,$jobReq,$jobResp,$jobTitle) {
         $message->to($applicantEmail, $applicantName)->subject
            ('Available Jobs');
         $message->from('myskillhub@gmail.com', 'myskillhub Admin');
      });

        }

    $sharedjobs          = new Sharedjob();
    $sharedjobs->user_id  = $userID;
    $sharedjobs->job_id   = $id;
    $sharedjobs->compName = $companyName;
    $sharedjobs->jobTitle = $jobTitle;
    $sharedjobs->save();

    if($sharedjobs) {
         return back()->with('success','You have successfully shared this job');
        }else {
        return back()->with('errors','This job could not be shared. Please try again');
   }
 }
 
public function getSharedjobs () {
        $sharedjobs = DB::table('sharedjobs')
            ->orderBy('created_at','desc')
            ->paginate(10);
  return view('menialJobSeekers.sharedjobs',['sharedjobs'=>$sharedjobs]) ;
    }

    public function deleteSharedjob($id)
    {
        $findUrl = Sharedjob::find($id);
        if($findUrl->delete()){
         return  Back()->with('success','selected Shared job deleted successfully');
        }
return back()->with('errors',' selected shared job could not deleted');
    
    }

    public function postJobs(Request $request) {
        $description =$request->description;
        $email='mathematicsmadeasy@gmail.com';
      foreach ($request->post1 as $key => $v) {
         $jobs = array(
          'post1'=>$request->post1[$key],
          'post2'=>$request->post2[$key]
        );



          $data= array('description'=>$description,'name'=>'Francis');
          Mail::send('postAvailableJobsByEmail', $data,$jobs, function($message) use ($email) {
         $message->to($email, 'Maths')->subject
            ('Available Jobs');
         $message->from('myskillhub@gmail.com', 'myskillhub Admin');
          });
      }

    
         return back()->with('success','You have successfully post this job');
        
   
    }
}
