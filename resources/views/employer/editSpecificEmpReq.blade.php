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
           <h5 class="card-header main-color-bg" style="color: #fff;">UPDATE REQUEST</h5>
        <div class="card-body">


      <!--Request for job seekers FORM   -->
<form novalidate method="POST" action="{{route('updateRequestedJobseekers',$editSpecificEmpReq->id)}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-row">
    <div class="col-md-6 mb-4">
      <label for="validationCustom01">Required Skills and Competencies</label>
      <input type="text" class="form-control" name="skillReq"  value="{{$editSpecificEmpReq->skillReq}}" required>
    </div>
    <div class="col-md-6 mb-4">
      <label for="validationCustom02">Company Name</label>
      <input type="text" class="form-control" name="compName" value="{{$editSpecificEmpReq->compName}}">
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Gender of Jobseekers</label>
     <select name="gender" class="form-control">
       <option value="{{$editSpecificEmpReq->sex}}">{{$editSpecificEmpReq->gender}}</option>
       <option value="Only Male">Only Male</option>
       <option value="Only Female">Only Female</option>
       <option value="Male & Female">Male & Female</option>
     </select>
      
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Company's address or Job's location</label>
      <input type="text" class="form-control"  name="companyAddress" value="{{$editSpecificEmpReq->companyAddress}}" >
    </div>
  </div>

    <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Contact phone</label>
      <input type="text" class="form-control" value="{{$editSpecificEmpReq->compPhone}}" name="compPhone" >
    
      
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Email Address</label>
      <input type="text" class="form-control" name="compEmail" value="{{$editSpecificEmpReq->compEmail}}" >
    </div>
  </div>
<div class="form-row">
<div class="col-md-6 mb-4">
    <label>State</label>
<select name="state" id="state" class="form-control input-lg dynamic"
data-dependent="lga" style=" height:60px;">
<option value="{{$editSpecificEmpReq->state}} ">{{$editSpecificEmpReq->state}}</option>
@foreach($state_lists as $state)
<option value="{{$state->state}}">{{$state->state}}</option>
@endforeach
</select>
</div>

  <div class="col-md-6 mb-4">
    <label>LGA</label>
<select name="lga" id="lga" class="form-control input-lg dynamic" style=" height:60px;">
<option value="{{$editSpecificEmpReq->lga}}">{{$editSpecificEmpReq->lga}}</option>
</select>
</div>
</div>


  <div class="form-row">
  <div class="col-md-6 mb-4">
    <label>Job description</label>
    <textarea name="jobdescription" class="form-control" rows="5" required="required">{{$editSpecificEmpReq->jobdescription}}</textarea>
  </div>

   <div class="col-md-6 mb-4">
    <label>Job Requirements</label>
    <textarea name="jobrequirement" class="form-control" rows="5">{{$editSpecificEmpReq->jobrequirement}}</textarea>
  </div>
  </div>

  <div class="form-row">
  <div class="col-md-6 mb-4">
    <label>Key Responsibilities and Accountabilities</label>
    <textarea name="jobresponsibility" class="form-control" rows="5">{{$editSpecificEmpReq->jobresponsibility}}</textarea>
  </div>

   <div class="col-md-6 mb-4">
    <label>EXPERIENCE LEVEL</label>
    <select name="jobExpLevel" class="form-control">
       <option value="{{$editSpecificEmpReq->jobExpLevel}}">{{$editSpecificEmpReq->jobExpLevel}}</option>
      
      <option value="Junior Level">Junior Level</option>
      <option value="Mid Level">Mid Level</option>
      <option value="Senior Level">Senior Level</option>
    </select>
  </div>
  </div>
  <div class="form-row">
  <div class="col-md-6 mb-4">
    <label>Recruitment deadline(yyy/mm/dd, time)</label>
    <input type="text" name="recruitDeadline" class="form-control" value="{{$editSpecificEmpReq->recruitDeadline}}" id="datetimepicker">
  </div>
  <div class="col-md-6 mb-4">
      <label for="validationCustom02">Number of applicants needed</label>
      <input type="text" class="form-control" name="noOfAplicant" value="{{$editSpecificEmpReq->noOfAplicant}}" required>
    </div>
  </div>

  <div class="form-row" >
  <div class="col-md-12 mb-4">
    <label for="validationCustom02">Job Title</label>
      <input type="text" class="form-control" name="jobTitle" value="{{$editSpecificEmpReq->jobTitle}}"  required>
    </div>
    </div>
  <button class="btn btn-primary" type="submit">Update Request</button>
</form>
</div>
</div>

 
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->


@endsection