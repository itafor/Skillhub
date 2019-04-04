@extends('master.dashboard')
@section('content')
@include('master.header') 
 <!-- breadcrum start -->

<section id="breadcrum">
  <div class="container">
    <ol class="breadcrum">
      <a href="">Dashboard / Applicants</a>
    </ol>
  </div>
</section>
        <!-- breadcrum ends -->

  <!-- Begin page content -->
<section id="main">
<!-- <div class="profile-card">
<div class="image-container">
<img src="/upload/{{$users->photo}}" alt="Applicants profile picture" class="profile-image">
<div class="title">
<h2>{{$users->name}}</h2>
</div>
</div>
<div class="main-container">
<p><i class="fa fa-phone info"></i> {{$users->phone}} </p>
<p><i class="fa fa-envelope info"></i> {{$users->email}} </p>
<p><i class="fa fa-intersex info"></i> {{$users->sex}} </p>
 <p><i class="fa fa-map-marker info"></i> {{$users->state}}</p>
 <p><i class="fa fa-graduation-cap info"></i>{{$users->qualification}}</p>
 <p><a href="#">View CV</a> </p>
 <hr>

 <p><b><i class="fa fa-asterisk info"></i>Skills</b> </p>
<p>Adobe Photoshop</p>
<div class="skill-bar">
<div class="progress-bar" style="width: 80%;">80%</div>
</div>
   

</div>
</div>
 -->
  <div class="container">
    <div class="row">

  <!-- Begin main content -->
       <div class="col-md-12">
        <!-- site overview -->
           <div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">Applicant's details</h5>
        <div class="card-body ">
                
<div class="col-md-6 pull-left jobseekerinfo ">
<p class="text-center"><b><i class="fa fa-asterisk info"></i>Info</b> </p>
<!-- <div class="profile-card"> -->
<div class="image-container">
<img src="/upload/{{$users->photo}}" alt="Applicants profile picture" class="profile-image">
<div class="title">
<h2>{{$users->name}}</h2>
</div>
</div>
<div class="main-container">
<p><i class="fa fa-phone info"></i> {{$users->phone}} </p>
<p><i class="fa fa-envelope info"></i> {{$users->email}} </p>
<p><i class="fa fa-intersex info"></i> {{$users->sex}} </p>
 <p><i class="fa fa-map-marker info"></i> {{$users->state}}</p>
 <p><i class="fa fa-graduation-cap info"></i>{{$users->qualification}}</p>
 <p><a href="#">View CV</a> </p>
 <hr>
</div>
<!-- </div> -->


</div>

<div class="col-md-6 pull-right text-center">
 <p><b><i class="fa fa-asterisk info"></i>Skills</b> </p>
<hr>

<!-- <div class="profile-card"> -->
<div class="main-container">
@foreach ($users->skills as $skill)
        
       <span style="font-family: roboto; font-size: 18px;"> {{$skill->name}} </span>
      <div class="skill-bar">
           <div class="progress-bar" style="width: 80%;">80%</div>
     </div>
            <br/>  
  @endforeach
<hr>

</div>
<!-- </div> -->
@if(count($users->imageproofs) >= 1 || count($users->videos) >= 1 || count($users->onlineproofs) >= 1)
<p><b><i class="fa fa-asterisk info"></i>Skill's Proofs</b> </p>
<hr>
@endif
 <ul> 
  @foreach ($users->imageproofs as $image)
<li>
<a href="/checkimageproof/{{$image->user_id == '' ? '' : $image->user_id}}" target="_blank">
 {{$image->user_id == '' ? '' : 'Picture Proof'}}</a></span><br>
</li>
  @endforeach

  @foreach ($users->onlineproofs as $online)
<li>
<a href="/checkonlineproof/{{$online->user_id == '' ? '' : $online->user_id}}" target="_blank">
 {{$online->user_id == '' ? '' : 'Website URL'}}</a></span><br>
</li>
  @endforeach

  @foreach ($users->videos as $video)
<li>
<a href="/checkvideoproof/{{$video->user_id == '' ? '' : $video->user_id}}" target="_blank">
 {{$video->user_id == '' ? '' : 'Video Proof'}}</a></span><br>
</li>
  @endforeach
</ul>
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