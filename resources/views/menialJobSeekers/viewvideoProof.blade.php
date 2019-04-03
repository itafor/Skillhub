@extends('master.dashboard')
@section('content')
@include('master.header') 
 <!-- breadcrum start -->

<section id="breadcrum">
  <div class="container">
      @include('master.remainder')
  </div>
</section>
        <!-- breadcrum ends -->

  <!-- Begin page content -->
<section id="main">
  <div class="container">
    <div class="row">
  <!-- Begin SIDE BAR -->
      @include('master.sideMenu')
  <!-- END SIDE BAR -->

  <!-- Begin main content -->
<div class="col-md-9">
 @if(count($videoProofs) > 0)
 <h5 class="card-header main-color-bg" style="color: #fff;">
           {{count($videoProofs)}} Video Proofs</h5>
 @foreach($videoProofs as $object)

<div class="card">
<h4>{{$object->name}}</h4>
<div class="card-body">
      <video id="my-video" class="video-js" controls preload="auto" width="800" height="400" data-setup="{}">
     <source src="/upload/{{$object->video}}" type='video/MP4'>
    <source src="/upload/{{$object->video}}" type="video/ogg">
       <source src="/upload/{{$object->video}}" type="video/avi">
 </video>
    
    <a href="{{url('deleteImageProof',[$object->id])}}"
  onclick="return confirm('Are you sure you want to delete this video?')">
    <button type="button" class="btn  btn-danger">Delete</button> 
    </a>
    </div>
  </div>
  @endforeach


@else
 <h4>No Video found</h4>
</div><!-- End main content -->
@endif


</div>
  </div>
</section>
    <!-- end page content -->






  
    
 
  


@endsection