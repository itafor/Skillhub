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
           <h5 class="card-header main-color-bg" style="color: #fff;">Upload Profile Picture</h5>
        <div class="card-body">

        
      <!--POST SKILL FORM STARTS-->
<form  action="{{route('updateProfilePicture')}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  
  
 
  <div class="form-row">

   <div class="form-row">
    
     <div class="col-md-6 mb-3">
      <label for="validationCustom04">Profile Picture</label>
      <input type="file" class="form-control" name="profileImage" >
    </div>

  </div>

  </div>
  <button class="btn btn-primary" type="submit">Update Profile Picture</button>
</form>

</div>
</div>


        
 
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->


@endsection