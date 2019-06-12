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

<div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">
           {{count($imageProofs)}} Images Proof</h5>
        <div class="card-body">

          <div class="col-md-12 col-lg-12 col-md-12 ">

 <div class="apartment-detal">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
 @if(count($imageProofs) > 0)
   <!-- Indicators -->
    <ol class="carousel-indicators">
   @foreach($imageProofs as $photo )
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
   @endforeach
  </ol>

    <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    @foreach($imageProofs as $photo )
       <div class="item {{ $loop->first ? 'active' : '' }}">
           <img class="d-block img-fluid" src="{{ asset('upload/'.$photo->image) }}"  alt="imageALT"  id="slideImage" >
              <div class="carousel-caption d-none d-md-block">
                 <h3>{{ $photo->name }}</h3>
              </div>
       </div>
    @endforeach
  </div>

    <!-- Left and right controls -->
   <a class="left carousel-control" href="#carouselExampleControls" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carouselExampleControls" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>


      </div>
    </div>
  </div>
</div>



  <!-- Non sliddable images -->
<div class="card-columns">
 @foreach($imageProofs as $object)
<div class="card">
    <img class="card-img-top" src="{{ asset('upload/'.$object->image) }}" alt="Applicants profile picture">

    <div class="card-body">
<a href="{{url('deleteImageProof',[$object->id])}}"
  onclick="return confirm('Are you sure you want to delete this project?')">
    <button type="button" class="btn  btn-danger">Delete</button> 
    </a>
    </div>
  </div>
  @endforeach
</div>

@else
 <h4>No image found</h4>
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