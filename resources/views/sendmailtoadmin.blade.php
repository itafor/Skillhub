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

  <!-- Begin page content -->
<section id="main">
  <div class="container">
    <div class="row">
  <!-- Begin SIDE BAR -->
    
  <!-- END SIDE BAR -->

  <!-- Begin main content -->

<div class="col-md-12">

<div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">Fill this form to hire {{$userID->name}}</h5>
        <div class="card-body">


      <!--POST SKILL FORM STARTS-->
<form  action="{{route('saveRequest')}}" method="POST" ">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-row">
    <input type="hidden"   name="user_id"   value="{{$userID->id}}">
    <div class="col-md-12 mb-4">
      <label for="validationCustom01">Name</label>
      <input type="text" name="empName" class="form-control" placeholder="Please type your name">
     
    </div>
   </div>
  <div class="form-row">
    <div class="col-md-12 mb-4">
      <label for="validationCustom02">Phone number</label>
      <input type="text" name="empphone" class="form-control" placeholder="plea type youe phone number"  required>
     
    </div>
  </div>
  <div class="form-row">
   
    <div class="col-md-12 mb-3">
      <label>Email Address</label>
    <input type="text" name="empEmail" class="form-control">
    
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label>Describe your needs</label>
    <textarea name="Empdescription" class="form-control" cols="10" rows="5" placeholder="Please, Briefly describe what you want from this applicant"></textarea>
    
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit Request</button>
</form>
</div>
</div>

        
 
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->


@endsection