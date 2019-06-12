<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
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

@if(count($websiteProofs) > 0)
  <!-- Non sliddable images -->
<div class="card-columns">
 @foreach($websiteProofs as $object)
<div class="card">
  <a href="https://{{$object->url}}"> <p>{{$object->url}}</p></a> 

    <div class="card-body">
      <a href="{{url('deleteWebsiteProof',[$object->id])}}"
  onclick="return confirm('Are you sure you want to delete this project?')">
    <button type="button" class="btn  btn-danger">Delete</button> 
    </a>
    </div>
  </div>
  @endforeach
</div>

@else
 <h4>No Website proof found</h4>
</div><!-- End main content -->
@endif


</div>
  </div>
</section>
    <!-- end page content -->






  
    
 
  

    <!-- end page content -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection