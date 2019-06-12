<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
use App\Sharedjob;

//use App\Carbon;
class UserController extends Controller
{
	 public function index() {
    $this->closeJob();
     $users = User::where('role','Applicant')
      ->orderBy('created_at','desc')
       ->paginate(21);
      return view('menialJobSeekers.frontpage',compact(['users']));
	}

public function searchskill(Request $request) {
 $users = User::join('skills','users.id','=','skills.user_id')
        ->selectRaw('skills.name, skills.description, skills.created_at,
      users.name, users.sex,users.id,users.phone,users.address,users.photo,users.state,users.lga,users.created_at,users.email, users.about,users.qualification
        ')
   ->where('skills.name','like','%'.$request->searchskill.'%')
   ->orderBy('users.created_at','desc')
   ->groupBy('skills.user_id')
   ->paginate(21);
  return view('menialJobSeekers.frontpage',compact(['users']));
}

public function fetchskill() {
    $this->closeJob();
     $users = User::where('role','Applicant')
      ->orderBy('created_at','desc')
       ->paginate(21);
      return view('menialJobSeekers.frontpage',compact(['users']));
  }
  
  public function fetchLocation() {
    $this->closeJob();
     $users = User::where('role','Applicant')
      ->orderBy('created_at','desc')
       ->paginate(21);
      return view('menialJobSeekers.frontpage',compact(['users']));
  }

public function searchlocation(Request $request)  {
  $users=DB::table('users')
    ->where('state','like','%'.$request->searchlocation.'%')
    ->where('role','applicant')
    ->orwhere('lga','like','%'.$request->searchlocation.'%')
      ->orderBy('created_at','desc')
   ->paginate(21);

      return view('menialJobSeekers.frontpage',compact(['users']));

}

public function admindashboard() {
            $requestedJobs =Employer::all();
            $employerJobReq =Employer::where('user_id',Auth::user()->id)->get();
            $employers =User::where('role','Employer')->get();
            $applicants =User::where('role','Applicant')->get();
            $userSkill =Skill::where('user_id',Auth::user()->id)->get();
            $sharedjobs =Sharedjob::all();
            return view('admindashboard',compact('requestedJobs','employers','applicants','userSkill','sharedjobs','employerJobReq'));
        }


public function allApplicants() {
            $allApplicants =User::where('role','Applicant')->paginate(5);
            return view('menialJobSeekers.all-applicants',compact('allApplicants'));
   }

public function closeJob() {
   // $qurey = Employer::where('recruitDeadline','>=',\Carbon\Carbon::now())
   //      ->update([
   //          'expired'=>'closed'
   //      ]);
   
    }

  public function jobseekerinfo($id) {
    $userId = Crypt::decrypt($id);
      $users = User::where('id',$userId)->first();
      return view('menialJobSeekers.jobseekerinfo',compact(['users']));
  }

 public function getSkill() {
  if(auth::user()->role == 'Applicant') {
    return view('menialJobSeekers.add-skill');
 	  }else{
         return back()->with('errors','Only applicants are allowed to add skills');
  	}
 }

	public function editProfile() {
    $state_lists= DB::table('state_lgas')
            ->groupBy('state')
            ->get();


		$userProfile=User::where('id',Auth::user()->id)->first();
		return view('menialJobSeekers.editProfile',['userProfile'=>$userProfile,'state_lists'=>$state_lists]);
	}

	  public function updateProfile(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'sex' => 'required|max:255',
            'address' => 'required|max:255',
            'state' => 'required|max:255',
            //'lga' => 'required|max:255',
            'email' => 'required|max:255',
            'qualification' => 'required|max:255',
            ]);
        $users = User::WHERE('id', Auth::user()->id)
        ->update([
            'name'=>$request->input('name'),
            'sex'=>$request->input('sex'),
            'address'=>$request->input('address'),
            'state'=>$request->input('state'),
            'lga'=>$request->input('lga'),
            'email'=>$request->input('email'),
            'qualification'=>$request->input('qualification'),
            'status'=>$request->input('status')
        ]);

        if($users){
         return back()->with('success','Profile updated successfully');
        }
        return back()->withInput()->with('errors','Profile update failed');
    }


public function viewSkills() {
    $skills= Skill::where('user_id',Auth::user()->id)->get();
    return view('menialJobSeekers.viewSkills',compact('skills'));
}

    public function editSkill($id){
 	  
       $editskill = Skill::WHERE('id',$id)->first();
      
		  return view('menialJobSeekers.editSkill',compact(['editskill']));
	         
    }


  public function addSkill(Request $request) {
    $this->validate($request,[
        'skillname' => 'required|max:255|string',
        'skill_level' => 'required',
    ]);
        $userID = Auth::user()->id;
        if(auth::check()){
       
       $skill = new Skill();
       $skill->name =  $request->skillname;
       $skill->description   = $request->skilldescription;
       $skill->skill_level   = $request->skill_level;
       $skill->user_id = auth()->user()->id;
       $skill->save();
    if ($skill) {
       return back()->with('success',' new Skill added successfully');
    } else {
        return back()->withInput()->with('errors','Error adding new skill');
        }
  }
return view('auth.login');
 
    }

 public function updateSkill(Request $request)
    {
       $skills = Skill::WHERE('id', $request->id)
        ->update([
            'name'=>$request->input('skillname'),
            'description'=>$request->input('skilldescription'),
            'skill_level'=>$request->input('skill_level'),
        ]);

        if($skills){
         return back()->with('success','Skills updated successfully');
        }
        return back()->withInput()->with('errors','Skills update failed');
      }

    public function profilePicture() {
      return view('menialJobSeekers.profilePicture');
        }

    public function updateProfilePicture(Request $request)
    {
      $this->validate($request,[
          'profileImage' => 'required|max:5000|mimes:jpg,jpeg,png,bmp,gif'
      ]);
        $fileName = $request->profileImage->getClientOriginalName();
           $request->profileImage->move(public_path('upload'),$fileName);
            $users = User::WHERE('id', Auth::user()->id)
            ->update([
            'photo'=>$fileName
            ]);
        if($users){
         return back()->with('success','Profile Picture updated successfully');
        }
        return back()->withInput()->with('errors','Profile Picture update failed');
    }

 public function addCV(Request $request)
    {
      $this->validate($request,[
          'cv' => 'required|max:5000|mimes:pdf,doc,docx,txt'
      ]);
        $cvName = $request->cv->getClientOriginalName();
           $request->cv->move(public_path('upload'),$cvName);
            $users = User::WHERE('id', Auth::user()->id)
            ->update([
            'mycv'=>$cvName
            ]);
        if($users){
         return back()->with('success','CV added successfully');
        }
        return back()->withInput()->with('errors','An error occured while adding CV,try again');
    }
  
   public function getMyCV() {
    //$userId = Crypt::decrypt($id);
     $users = User::where('id',auth::user()->id)->first();
      return view('menialJobSeekers.addcv',compact('users'));
        }

  public function viewProfile($id) {
   //$userId = Crypt::decrypt($id);
      $users = User::where('id',$id)->first();
      return view('menialJobSeekers.jobseekerinfo',compact(['users']));
        }

       

   public function imageProof() {
        return view('menialJobSeekers.imageProof');
        }

    public function websiteProof() {
        return view('menialJobSeekers.websiteProof');
        }

    public function videoProof() {
        return view('menialJobSeekers.addVideoProof');
        }
  
    public function storeWebsiteProof(Request $request) {

            $val =  $this->validate($request,[
                'websitename' => 'required|max:255',
                'websiteurl' => 'required|max:225|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/'
                 ]);
    if($val){
      $urlInput = $request->input('websiteurl');
        $webURL = Onlineproof::where('url',$urlInput)->first();
  if ($webURL) {
        return back()->with('errors','Website proof URL you entered already exist');
          }else{
        $websiteProof = new  Onlineproof();
        $websiteProof->name  = $request->input('websitename');
        $websiteProof->url = $request->input('websiteurl');
        $websiteProof->user_id = auth::user()->id;
        $websiteProof->save();

        if($websiteProof){
         return back()->with('success','Website proof successfully added');
        }
        return back()->withInput()->with('errors','website proof addition failed');
          }

      }    
    }



public function storeImageProof(Request $request)
    {
      $this->validate($request,[
        'imageProof' => 'required|max:2000|mimes:jpg,jpeg,png,gif'
      ]);
        $fileName = $request->imageProof->getClientOriginalName();
        $request->imageProof->move(public_path('upload'),$fileName);
        $imageproofs = new  Imageproof();
        $imageproofs->name  = $request->input('imagename');
        $imageproofs->image = $fileName;
        $imageproofs->user_id = auth::user()->id;
        $imageproofs->save();

        if($imageproofs){
         return back()->with('success','Image proof successfully added');
        }
        return back()->withInput()->with('errors','image Proof addition failed');
    }

      public function viewImageProof() {
        $imageProofs = Imageproof::where('user_id',auth::user()->id)->get();
        return view('menialJobSeekers.viewImageProof',compact(['imageProofs']));
    }

    public function viewApplicants($id) {
      $userId = Crypt::decrypt($id);
      $users = User::where('id',$userId)->first();
      //dd($applicant);
      return view('menialJobSeekers.jobseekerinfo',compact(['users']));

      //return view('menialJobSeekers.viewImageProof',compact(['imageProofs']));
  }
    
public function storeVideoProof(Request $request)
    {
      $this->validate($request,[
        'videoname'=>'required|max:255',
        'videoProof'=>'required|max:8000|mimetypes:video/mp4'
      ]);
      
        $fileName = $request->videoProof->getClientOriginalName();
        $request->videoProof->move(public_path('upload'),$fileName);
        $videoProofs = new  Videoproof();
        $videoProofs->name  = $request->input('videoname');
        $videoProofs->video = $fileName;
        $videoProofs->user_id = auth::user()->id;
        $videoProofs->save();

        if($videoProofs){
         return back()->with('success','Video proof successfully added');
        }
        return back()->withInput()->with('errors','Video Proof addition failed');
    }

      public function viewVideoProof() {
        $videoProofs = videoProof::where('user_id',auth::user()->id)
        ->orderBy('created_at','DSC')
        ->get();
        return view('menialJobSeekers.viewvideoProof',compact(['videoProofs']));
    }

      public function checkVideoProofs($id) {
        $userSex = User::where('id',$id)->first();

        $checkvideoProofs = videoProof::where('user_id',$id)
        ->orderBy('created_at','DSC')
        ->get();
        return view('menialJobSeekers.checkvideoproof',compact(['checkvideoProofs','userSex']));
    }



public function checkOnlineProofs($id) {
        $userSex = User::where('id',$id)->first();
        $checkOnlineProofs = Onlineproof::where('user_id',$id)
        ->orderBy('created_at','DSC')
        ->get();
        return view('menialJobSeekers.checkonlineproof',compact(['checkOnlineProofs','userSex']));
    }

    public function selectUserToRequest($id) {
    $user= Crypt::decrypt($id);
        $userID = User::where('id',$user)->first();
        $myskills =$userID->skills;
        return view('sendmailtoadmin',compact(['userID','myskills']));
    }

      public function checkImageProofs($id) {
        $userSex = User::where('id',$id)->first();
        $checkimageProofs = Imageproof::where('user_id',$id)
        ->orderBy('created_at','DSC')
        ->get();
        return view('menialJobSeekers.checkimageproof',compact(['checkimageProofs','userSex']));
    }

      public function viewWebsiteProof() {
        $websiteProofs = Onlineproof::where('user_id',auth::user()->id)->get();
        return view('menialJobSeekers.viewWebsiteProof',compact(['websiteProofs']));
    }

    public function fetch(Request $request){
    $select = $request->get('select');
    $value = $request->get('value');
    $dependent = $request->get('dependent');
    $data = DB::table('state_lgas')
    ->where($select,$value)
    ->groupBy($dependent)->get();
    $output = '<option value=""> Select  '.ucfirst($dependent).'</option>';
     foreach($data as $row){
    $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';

     }
     echo $output;
  }

public function applyToThisJob ($id) {
   $checkApplication =Jobapplication::where('user_id',auth::user()->id)
   ->where('job_id',$id)->first();
   if($checkApplication) {
return back()->with('errors','You have already applied for this job');
} else {
   $applications = new Jobapplication();
   $applications->job_id = $id;
   $applications->user_id = auth::user()->id;
   $applications->save();
if($applications){
         return  Back()->with('success','You have successfully applied to this job');
        }
return back()->with('errors','An attempt to applied to this job failed. please try again');
}

}
  public function destroyImageProof(Request $request) {
        //dd($project);
        $findImage = Imageproof::find($request->id);
        if($findImage->delete()){
         return  Back()->with('success','Image proof deleted successfully');
        }
return back()->with('errors',' proof could not deleted');
}
    
    

public function destroyWebsiteProof(Request $request)
    {
        //dd($project);
        $findUrl = Onlineproof::find($request->id);
        if($findUrl->delete()){
         return  Back()->with('success','Website proof deleted successfully');
        }
return back()->with('errors',' website proof could not deleted');
    
    }

public function deleteSkill($id)
    {
        $findUrl = Skill::find($id);
        if($findUrl->delete()){
         return  Back()->with('success','Selected skill deleted successfully');
        }
return back()->with('errors',' Selected skill could not deleted');
    
    }

    public function deleteApplicant($id)
    {
        $finduser = User::find($id);
        if($finduser->delete()){
         return  Back()->with('success','Selected applicant deleted successfully');
        }
return back()->with('errors',' Selected applicant could not deleted');
    
    }

//autosearch state
function fetchBystate(Request $request){
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('users')
    ->where('state','LIKE',"%{$query}%")
    ->where('role','applicant')
    ->groupBy('state')
    ->get();
    $output = '<ul class="dropdown-menu" 
    style="display: block; 
    position: absolute; z-index: 1; width:300px; padding-left:20px; margin-left:10px;">';
    foreach ($data as $row) {
$output.='<li><a href="#">'.$row->state.'</a></li>';
    }
   $output .='</ul>';
   echo $output;
    ;
    }
   }
//autosearch skills
   function fetchBySkill(Request $request){
     if($request->get('query2'))
     {
      $query2 = $request->get('query2');
      $users = User::join('skills','users.id','=','skills.user_id')
        ->selectRaw('skills.name, skills.description, skills.created_at,
       users.sex,users.id,users.phone,users.address,users.photo,users.state,users.lga,users.created_at,users.email, users.about,users.qualification
        ')
   ->where('skills.name','like',"%{$query2}%")
    ->get();
    $output = '<ul class="dropdown-menu" 
    style="display: block; 
    position: absolute; z-index: 1; width:300px; padding-left:20px; margin-left:10px;">';
    foreach ($users as $row) {
$output.='<li><a href="#">'.$row->name.'</a></li>';
    }
   $output .='</ul>';
   echo $output;
    ;
    }
   }
}
