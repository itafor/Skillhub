@extends('master.dashboard')
@section('content')
@include('master.header') 
 <!-- breadcrum start -->

<section id="breadcrum">
  <div class="container">
    <ol class="breadcrum">
      @if(auth::user())
      <a href="/admindashboard" style="width: 100px; height:70px; font-size: 20px; border-radius: 5px;  color: #ffffff;">Home</a>
      @endif
    </ol>
  </div>
</section>
        <!-- breadcrum ends -->

  <!-- Begin page content -->
<section id="main">

  <div class="container">
    <div class="row">

  <!-- Begin main content -->
       <div class="col-md-12">
        <!-- site overview -->
           <div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;"> 
           <?= auth::user() ? 'My Profile' : 'Applicant details' ?>
         </h5>
        <div class="card-body ">
                
<div class="col-md-4 pull-left jobseekerinfo ">
<p class="text-center"><b><i class="fa fa-asterisk info"></i>Info</b> </p>
<div class="image-container">
<img src="/upload/{{$users->photo == '' ? 'female.png' : $users->photo}}" class="profile-image">
<div class="title">
<h2>{{$users->name}}</h2>
</div>
</div>
<div class="main-container">
<p><i class="fa fa-phone info"></i> {{$users->phone}} </p>
<p><i class="fa fa-envelope info"></i> {{$users->email}} </p>
<p><i class="fa fa-intersex info"></i> {{$users->sex}} </p>
@if($users->state)
 <p><i class="fa fa-map-marker info"></i> {{$users->state}}</p>
  @endif
@if($users->mycv)
 <p><i class="fa fa-download info"></i><a href="/upload/{{$users->mycv}}" download="{{$users->mycv}}">CV</a> </p>
 @endif
 <hr>
</div>
</div>

<div class="col-md-8 pull-right text-center">
 <p><b><i class="fa fa-asterisk info"></i>Skills</b> </p>
<hr>
<div class="main-container">
  @if(count($users->skills) >=1)
  <table width="100%" class="table table-bordered">
    <tr>
      <th>Skill</th>
      <th> Experience Level</th>
    </tr>
    @foreach ($users->skills as $skill)
     <tr>
      <td><span style="font-family: roboto; font-size: 18px;"> {{$skill->name}} </span></td>
      <td>   <div class="skill-bar">
        <div class="progress-bar" style="width: {{$skill->skill_level}}%;">{{$skill->skill_level}}%</div>
     </div> </div></td>
    </tr>
     @endforeach
  </table>
  @else
  <p>No skill to display</p>
@endif

@if(count($users->imageproofs) >= 1 || count($users->videos) >= 1 || count($users->onlineproofs) >= 1)
<p><b><i class="fa fa-asterisk info"></i>Skill's Proofs</b> </p>
<hr>
<table width="100%">
  <tr>
@endif
 <ul> 
    <td>
      @foreach ($users->imageproofs as $image)
<li>
<a href="/checkimageproof/{{$image->user_id == '' ? '' : $image->user_id}}" target="_blank">
 {{$image->user_id == '' ? '' : 'Picture Proof'}}</a></span><br>
</li>
  @endforeach
    </td>
    <td>

  @foreach ($users->onlineproofs as $online)
<li>
<a href="/checkonlineproof/{{$online->user_id == '' ? '' : $online->user_id}}" target="_blank">
 {{$online->user_id == '' ? '' : 'Website URL'}}</a></span><br>
</li>
  @endforeach
    </td>
    <td>
      
  @foreach ($users->videos as $video)
<li>
<a href="/checkvideoproof/{{$video->user_id == '' ? '' : $video->user_id}}" target="_blank">
 {{$video->user_id == '' ? '' : 'Video Proof'}}</a></span><br>
</li>
  @endforeach
    </td>
</ul>
 </tr>
</table>
<hr>
   <span><i class="fa fa"></i>STATUS: <b>{{$users->status}}</b></span><br>
<?php $userId = $users->id; 
     $cryptId = Crypt::encrypt($userId);       
?>
<div class="hireMe btn btn-primary"><a href="/requestUser/{{$cryptId}}">{{$users->status == 'Available'? 'HIRE ME' : 'HIRED'}} </a>
   </div>
   <hr>
               </div>
        </div>
    </div>
</div><!-- End main content -->

</div>

</div>
  
</section>
    <!-- end page content -->
@endsection