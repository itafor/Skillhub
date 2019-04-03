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
           <h5 class="card-header main-color-bg" style="color: #fff;">Add Image Proof</h5>
        <div class="card-body">

        
      <!--POST SKILL FORM STARTS-->
<form  action="{{route('storeWebsiteProof')}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-row">
    
     <div class="col-md-6 mb-3">
      <label for="validationCustom04">Websit  Name</label>
      <input type="text" class="form-control" name="websitename" >
      
    </div>

    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Website URL</label>
      <input type="text" class="form-control" name="websiteurl" >
      
    </div>

  </div>

 
  <button class="btn btn-primary" type="submit">Add website Proof</button>
</form>

</div>
</div>


        
 
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->


@endsection