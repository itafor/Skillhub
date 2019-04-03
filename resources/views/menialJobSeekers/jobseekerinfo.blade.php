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
  <div class="container">
    <div class="row">

  <!-- Begin main content -->
       <div class="col-md-12">
        <!-- site overview -->

           <div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">Applicant's details</h5>
        <div class="card-body ">
                
<div class="col-md-6 pull-left jobseekerinfo text-center">
<h3>Info</h3>
<hr>
    <img class="card-img-top" src="/upload/{{$users->photo}}" alt="Applicants profile picture">

 <h3>{{$users->name}}</h3>
 <span><i class="fa fa-intersex"></i> {{$users->sex}} </span><br>
 <span><i class="fa fa-map-marker"></i> {{$users->state}}</span><br>
 <span><i class="fa fa-graduation-cap"></i>{{$users->qualification}}</span><br>
 <span><i class="fa fa-tasks"></i><a href="#">View CV</a> </span>
 <hr>
 <h2>ABOUT ME</h2>
<p>{{$users->about}}</p>
<hr>
 


</div>

<div class="col-md-6 pull-right text-center">
<h3>Skills</h3>
<hr>

@foreach ($users->skills as $skill)
        
       <span style="font-family: roboto; font-size: 18px;"> {{$skill->name}} ,</span>
              
  @endforeach
<hr>
<h3>Skill's Proofs</h3>
<hr>
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