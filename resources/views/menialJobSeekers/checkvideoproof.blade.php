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
            <h5 class="card-header main-color-bg" style="color: #fff;">Do you need  {{$userSex->sex == 'Male' ? 'his' : 'her'}} service? Contact us on 098975642  
  OR

  <div class="hireMe btn btn-primary"><a href="#" ">{{$userSex->status == 'Available'?  $userSex->sex == 'Male' ? 'Employ him' : 'Employ her'  : 'EMPLOYED'}} </a> </div>
           </h5>
        <div class="card-body">
              
<div class="col-md-12 pull-left" >
 @if(count($checkvideoProofs) > 0)
 <h5 class="card-header main-color-bg" style="color: #fff;">
           {{count($checkvideoProofs)}} Video Proofs</h5>
 @foreach($checkvideoProofs as $object)

<div class="card">
<h4>{{$object->name}}</h4>
<div class="card-body">
      <video id="my-video" class="video-js" controls preload="auto" width="800" height="400" data-setup="{}">
     <source src="/upload/{{$object->video}}" type='video/MP4'>
    <source src="/upload/{{$object->video}}" type="video/ogg">
       <source src="/upload/{{$object->video}}" type="video/avi">
 </video>
    
    </div>
  </div>
  @endforeach


@else
 <h4>No image found</h4>
</div><!-- End main content -->
@endif





        </div>
</div>
        
      </div><!-- End main content -->




</div>

    </div>
  
</section>
    <!-- end page content -->


@endsection