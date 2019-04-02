@extends('master.dashboard')
@section('content')
@include('master.header') 

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
<form  action="{{route('saveRequest')}}" method="POST">
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
      <input type="text" name="empphone" class="form-control" placeholder="please type your phone number"  required>
     
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
      <label>Select required skills</label>
        
        <select name="skills[]" class="form-control chzn-select" multiple="true"  >
          @foreach($myskills as $skill)
            <option value="{{$skill->name}}">{{$skill->name}}</option>
          @endforeach
        </select>
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