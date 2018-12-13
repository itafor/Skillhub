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

<div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">Workers Request Form</h5>
        <div class="card-body">


      <!--Request for job seekers FORM   -->
<form novalidate method="POST" action="{{route('storeRequestedJobseekers')}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

   <div class="form-row" >
  <div class="col-md-12 mb-4">
    <label for="validationCustom02">Job Title</label>
      <input type="text" class="form-control" name="jobTitle" placeholder="Please enter job Title"  required>
    </div>
    </div>

  <div class="form-row">
    <div class="col-md-6 mb-4">
      <label for="validationCustom01">Required Skills and Competencies</label>
      <input type="text" class="form-control" name="skillReq" placeholder="e.g. Cleaners,Cooks, maths teacher,web developers" value="" required>
    </div>
    <div class="col-md-6 mb-4">
      <label for="validationCustom02">Company Name</label>
      <input type="text" class="form-control" name="compName" placeholder="Please enter Company name" required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Gender of Jobseekers</label>
     <select name="gender" class="form-control">
       <option value="0">Select Gender</option>
       <option value="Only Male">Only Male</option>
       <option value="Only Female">Only Female</option>
       <option value="Male & Female">Male & Female</option>
     </select>
      
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Company's address or Job's location</label>
      <input type="text" class="form-control"  placeholder="Job location" name="companyAddress" >
    </div>
  </div>

    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Contact phone</label>
      <input type="text" class="form-control"  placeholder="Phone number of person to contact" name="compPhone" >
    
      
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Email Address</label>
      <input type="text" class="form-control"  placeholder="Email Address of person to contact" name="compEmail" >
    </div>
  </div>
<div class="form-row">
<div class="col-md-6 mb-3">
    <label>State</label>
<select name="state" id="state" class="form-control input-lg dynamic"
data-dependent="lga" style=" height:60px;">
<option value="">Select State</option>
@foreach($state_lists as $state)
<option value="{{$state->state}}">{{$state->state}}</option>
@endforeach
</select>
</div>

  <div class="col-md-6 mb-3">
    <label>LGA</label>
<select name="lga" id="lga" class="form-control input-lg dynamic" style=" height:60px;">
<option value=""></option>
</select>
</div>
</div>


  <div class="form-row">
  <div class="col-md-6 mb-4">
    <label>Job description</label>
    <textarea name="jobdescription" class="form-control" rows="5"  placeholder="please describe the job"></textarea>
  </div>

   <div class="col-md-6 mb-4">
    <label>Job Requirements</label>
    <textarea name="jobrequirement" class="form-control" rows="5" placeholder="please enter job requirements"></textarea>
  </div>
  </div>

  <div class="form-row">
  <div class="col-md-6 mb-4">
    <label>Key Responsibilities and Accountabilities</label>
    <textarea name="jobresponsibility" class="form-control" rows="5"  placeholder="please  enter job Responsibilities"></textarea>
  </div>

   <div class="col-md-6 mb-4">
    <label>EXPERIENCE LEVEL</label>
    <select name="jobExpLevel" class="form-control">
      <option value="">Select</option>
      <option value="Junior Level">Junior Level</option>
      <option value="Mid Level">Mid Level</option>
      <option value="Senior Level">Senior Level</option>
    </select>
  </div>
  </div>
  <div class="form-row">
  <div class="col-md-6 mb-4">
    <label>Recruitment deadline</label>
    <input type="text" name="recruitDeadline" class="form-control" id="datetimepicker">
  </div>
  <div class="col-md-6 mb-4">
      <label for="validationCustom02">Number of applicants needed</label>
      <input type="text" class="form-control" name="noOfAplicant" placeholder="e.g. 1,2,3,,4 e.t.c" placeholder="How many applicants do you want?" required>
    </div>
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