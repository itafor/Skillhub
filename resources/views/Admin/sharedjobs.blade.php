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
                   <div id="message"></div>
      
 <div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">SHARED JOBS</h5>
        <div class="card-body">
                  @if(count($sharedjobs) > 0)
               <table class="table table-striped table-hover table-responsive" >
                 <tr>
                   <th>Company</th>
                   <th>Job Title</th>
                   <th>Date Posted</th>
                   @if(auth::user()->role == 'Applicant')
                   <th>View & Apply</th>
                   @endif
                   @if(auth::user()->role == 'Admin')
                   <th>ACTION</th>
                   @endif
                 </tr>
                  @foreach($sharedjobs as $req)
                
                 <tr>
                   <td>{{$req->compName}}</td>
                   <td>{{$req->jobTitle}}</td>
                  <td>{{ Carbon\carbon::createFromTimestamp(strtotime($req->created_at))->diffForHumans()}}</td>
                  @if(auth::user()->role == 'Applicant')
              <td> <a href="viewSpecificEmpReq/{{$req->job_id}}"><i class="fa fa-eye text-primary"></i> Apply</a></td>
                   @endif
              
              @if(auth::user()->role == 'Admin')
              <td> <a href="deleteSharedjob/{{$req->job_id}}" onclick="return confirm('Are you sure you want delete this sharedjob?')"><i class="fa fa-remove text-primary"></i></a></td>
                   @endif

                   @endforeach
                   
                   @else
                   <h4>No job found</h4>
                   @endif
                 </tr>
               </table> 
               {{$sharedjobs->links()}}
        </div>
</div>  <!-- Latest Users ends-->
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->

<script type="text/javascript">
  //Ananimious self invoking function
  (function() {
    
     // declare variables and objects properties
    let pending = document.getElementById('Pending');

    let approve = document.getElementById('Approved');

    
    pending.style.color = 'Brown';
    approve.style.color = 'Green';

    
   
  }());
</script>
@endsection