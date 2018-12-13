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
        <!-- Latest Users start-->
 <div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">REQUESTED APPLICANTS FROM EMPLOYERS</h5>
        <div class="card-body">
               <table class="table table-bordered table-hover table-responsive" >
                 <tr>
                   <th>NAME</th>
                   <th>EMAIL</th>
                   <th>PHONE</th>
                   <th>DESCRIPTION</th>
                   <th>APPLICANT REQUESTED</th>
                   <th>ACTION</th>
                 </tr>
                  @foreach($requestedApplicants as $request)

                 <tr>
                   <td>{{$request->empName}}</td>
                   <td>{{$request->empEmail}}</td>
                   <td>{{$request->empphone}}</td>
                   <td>{{$request->Empdescription}}</td>
                   <td><a href="applicanttohire/{{$request->id}}">View</a></td>
                   <td><a href="deleteReq/{{$request->id}}" onclick="return confirm('Are you sure to delete this Employer request?');"><i class="fa fa-remove text-danger"></i></a></td>
                 </tr>
                   @endforeach

               </table> 

        </div>
</div>  <!-- Latest Users ends-->
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->


@endsection