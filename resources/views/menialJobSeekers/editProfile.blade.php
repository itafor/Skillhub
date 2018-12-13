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
           <h5 class="card-header main-color-bg" style="color: #fff;">UPDATE PROFILE</h5>
        <div class="card-body">

        
      <!--POST SKILL FORM STARTS-->
<form  action="{{route('updateProfile')}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  
   
  <div class="form-row">
    <div class="col-md-6 mb-4">
      <label for="validationCustom01">Full name</label>
      <input type="text" name="name" class="form-control" value="{{$userProfile->name}}" required>
          </div>
    <div class="col-md-6 mb-4">
      <label for="validationCustom02">Gender</label>
      <input type="text" name="sex" class="form-control" value="{{$userProfile->sex}}"  required>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Residential Address</label>
     <textarea name="address" class="form-control" >{{$userProfile->address}}</textarea>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom04">Email Address</label>
      <input type="text" class="form-control" name="email" value="{{$userProfile->email}}" readonly="readonly" >
    </div>
  </div>

   
<div class="form-row">
<div class="col-md-6 mb-4">
    <label>State</label>
<select name="state" id="state" class="form-control input-lg dynamic"
data-dependent="lga" style=" height:60px;">
<option value="{{$userProfile->state}} ">{{$userProfile->state}}</option>
@foreach($state_lists as $state)
<option value="{{$state->state}}">{{$state->state}}</option>
@endforeach
</select>
</div>

  <div class="col-md-6 mb-4">
    <label>LGA</label>
<select name="lga" id="lga" class="form-control input-lg dynamic" style=" height:60px;">
<option value="{{$userProfile->lga}}">{{$userProfile->lga}}</option>
</select>
</div>
</div>

<div class="form-row">
  <div class="col-md-6 mb-4">
      <label for="validationCustom02">Select Highest   Qualification</label>
     <select name="qualification" class="form-control" required="required">
       <option value="{{$userProfile->qualification}}">{{$userProfile->qualification}} </option>
       <option value="None">None</option>
       <option value="Primary">Primary</option>
       <option value="Secondary">Secondary</option>
       <option value="Tertially">Tertially</option>
     </select>
    </div>
     <div class="col-md-6 mb-3">
      <label for="validationCustom04">Phone</label>
      <input type="text" class="form-control" name="phone" value="{{$userProfile->phone}}" readonly="readonly" >
    </div>
</div>
  <button class="btn btn-primary" type="submit">Update Profile</button>
</form>

</div>
</div>


        
 
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->


@endsection