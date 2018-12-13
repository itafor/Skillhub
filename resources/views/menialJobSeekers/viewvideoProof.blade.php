@extends('master.dashboard')
@section('content')
 <header id="header">
        <div class="container"> 
          <div class="row">
            <div class="col-md-10">
              <h2><i class="fa fa-cog"></i> Dashboard <small>Manage your Site</small></h2>
            </div>

            <div class="col-md-2 ">

              <div class="dropdown create">
           <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Create Content
        </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         <a class="dropdown-item" type="button" data-toggle="modal" data-target="#addpage"><i class="fa fa-list-alt"></i> Add page</a>
          <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Add Post</a>
        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Users</a>
      </div>
  </div>
            </div>
          </div>
        </div>
    </header>

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