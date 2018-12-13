<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use App\Employer;
use App\Education;
use App\Guarantor;
use App\Skill;
use App\Hireme;

class MailController extends Controller {
   
   public function saveRequest(Request $request){

    $this->validate($request,[
      'empName' => 'required|max:255|string',
       'empphone' => 'required|regex:/(0)[0-9]{10}/|max:11',
      'empEmail' => 'required|max:255|email',
      'Empdescription' => 'required|max:255|string'
    ]);

   	$userID = $request->user_id;
   	$empName = $request->empName;
    $empphone = $request->empphone;
    $empEmail = $request->empEmail;
   	$Empdescription = $request->Empdescription;

      $data = array('name'=>'Itafor Francis','Empdescription'=>$Empdescription,
      	'empName'=>$empName,'empEmail'=>$empEmail,'empphone'=>$empphone,'userID'=>$userID);
     $mail = Mail::send('mailtoadmin', $data, function($message) use ($userID,$empName,$empphone,$empEmail,$Empdescription) {
         $message->to('itaforfrancis@gmail.com', 'mySkillhub')->subject
            ('Request to hire an applicant');
         $message->from($empEmail, $empName);
      });

     $hiredApplicant = new Hireme();
     $hiredApplicant->empName = $request->input('empName');
     $hiredApplicant->empphone = $request->input('empphone');
     $hiredApplicant->empEmail = $request->input('empEmail');
     $hiredApplicant->Empdescription = $request->input('Empdescription');
     $hiredApplicant->user_id = $request->input('user_id');
     $hiredApplicant->save();

     if($hiredApplicant){
      return back()->with('success','your request has been delivered successfully to Myskillhub, we will get back to you shortly');
        
        }else{
        return back()->withInput()->with('errors','Request failed to deliver. Try again later');
          }
   }


}