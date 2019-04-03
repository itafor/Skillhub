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
           <h5 class="card-header main-color-bg" style="color: #fff;">Job Details  
            @if(auth::user()->role == 'Applicant')
        <a href="/applyToThisJob/{{$viewSpecificEmpReq->id}}" onclick="return validate()">Apply Now</a>
           @endif

      <label for="remember">      
    <input id="remember" name="remember" type="checkbox"  />
    My skills matched the job requirement</label> 
</h5>
        <div class="card-body">
<div class="card-row">
  <div class="col-md-4 pull-left" >
      <small style="font-size:16;"><b>Company Name</b></small>         
  <p class="content">{{$viewSpecificEmpReq->compName}}</p>

  <small style="font-size:16;"><b>Job Title</b></small>         
  <p class="content">{{$viewSpecificEmpReq->jobTitle}}</p>

<small style="font-size:16;"><b>Company Phone</b></small>         
  <p class="content">{{$viewSpecificEmpReq->compPhone}}</p>

<small style="font-size:16;"><b>Company Email</b></small>         
  <p class="content">{{$viewSpecificEmpReq->compEmail}}</p>

<small style="font-size:16;"><b>Company Address</b></small>         
  <p class="content">{{$viewSpecificEmpReq->companyAddress}}</p>
  

<small style="font-size:16;"><b>Company Location</b></small>         
  <p class="content">{{$viewSpecificEmpReq->state}}</p>

  <small style="font-size:16;"><b> Applicants needed</b></small>         
  <p class="content">{{$viewSpecificEmpReq->noOfAplicant}}</p>

  <small style="font-size:16;"><b>Request Status</b></small>         
  <p class="content">{{$viewSpecificEmpReq->status}}</p>

<small style="font-size:16;"><b>Date Posted</b></small>         
<p> {{ Carbon\carbon::createFromTimestamp(strtotime($viewSpecificEmpReq->created_at))->diffForHumans()}}</p>

<small style="font-size:16;"><b>Recruitment End date</b></small>

<p> {{ Carbon\carbon::createFromTimestamp(strtotime($viewSpecificEmpReq->recruitDeadline))->diffForHumans()}}</p>         
  </div>

  <div class="col-md-6 pull-right" style="border-left: 1px solid #333;">
    <small style="font-size:16;"><b>Required Skills</b></small>         
  <p class="content">{{$viewSpecificEmpReq->skillReq}}</p>

  <small style="font-size:16;"><b>Job description</b></small>         
  <p class="content">{{$viewSpecificEmpReq->jobdescription}}</p>

  <small style="font-size:16;"><b>Job Requirements</b></small>         
  <p class="content">{{$viewSpecificEmpReq->jobrequirement}}</p>

  <small style="font-size:16;"><b>Key Responsibilities</b></small>         
  <p class="content">{{$viewSpecificEmpReq->jobresponsibility}}</p>

<small style="font-size:16;"><b>EXPERIENCE LEVEL</b></small>         
  <p class="content">{{$viewSpecificEmpReq->jobExpLevel}}</p>
 

<small style="font-size:30;"><b>STATUS</b></small>         
  <p class="content" style="font-size:30;">{{$viewSpecificEmpReq->expired}}</p>
  </div>
       
</div>
        </div>
<div class="card-body">
@if(auth::user()->role == 'Admin')
<a href="/shareJobToApplicants/{{$viewSpecificEmpReq->id}} " onclick="return confirm('Do you really want to share this job to applicants?')">Share this job to Applicants</a>
@endif

@if(auth::user()->role == 'Applicant')
<a href="/applyToThisJob/{{$viewSpecificEmpReq->id}}" onclick="return validate()">Apply Now</a>
@endif

@if(auth::user()->role == 'Employer')
<a href="/editSpecificEmpReq/{{$viewSpecificEmpReq->id}}">EDIT REQUEST</a>

<a href="/deleteSpecificEmpReq/{{$viewSpecificEmpReq->id}}" onclick="return confirm('Are you sure you want to delete this request?');" class="text-danger">DELETE REQUEST</a>

@endif

</div>
</div>  <!-- Latest Users ends-->
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->
<script type="text/javascript">
    function validate(e) {
        if (document.getElementById('remember').checked) {
            return true;
        } else {
            alert("You must accept that your skills matched the job Requirements by checking the checked button above.");
return false;
        }
    }
    </script>

@endsection