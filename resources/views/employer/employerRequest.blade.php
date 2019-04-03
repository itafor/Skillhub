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
                   <div id="message"></div>
      
 <div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">All JOBS POSTED BY EMPLOYERS</h5>
        <div class="card-body">
                  @if(count($employerReq) > 0)
               <table class="table table-striped table-hover table-responsive" >
                 <tr>
                   <th>Job Title</th>
                   <th>Date Posted</th>
                   <th>Applicants</th>
                   <th>Status</th>
                   <th>View</th>
                   <th>Update</th>
                   <th>Delete</th>
                 <?= auth::user()->role == 'Admin' ?'<th>ACTION</th>':''?>
                 </tr>
                  @foreach($employerReq as $req)
                
                 <tr>
                   <td>{{$req->jobTitle}}</td>
                   <td>{{ Carbon\carbon::createFromTimestamp(strtotime($req->created_at))->diffForHumans()}}</td>
              <td> <a href="applicationsToThisJob/{{$req->id}}">Applicants</a></td>

                  <td id="{{$req->status}}">{{$req->status}}</td>
              <td> <a href="viewSpecificEmpReq/{{$req->id}}"><i class="fa fa-eye text-primary"></i></a></td>
              <td> <a href="editSpecificEmpReq/{{$req->id}}"><i class="fa fa-edit text-success"></i></a></td>
              <td> <a href="deleteSpecificEmpReq/{{$req->id}}" onclick="return confirm('Are you sure to delete this Application request?');"><i class="fa fa-remove text-danger"></i></a></td> 

              @if($req->status === "Pending")
           <td id="approve"> <a href="approveSpecificEmpReq/{{ auth::user()->role == 'Admin' ? $req->id : '' }}" onclick="return confirm('You are about to approve this Application request. Are you sure?');" class="text-success"> {{ auth::user()->role == 'Admin' ? 'Approve' : '' }}</a></td>
           @else
          <td id="disapprove"> <a href="disapproveSpecificEmpReq/{{ auth::user()->role == 'Admin' ? $req->id : '' }}" onclick="return confirm('You are about to disapprove this Application request. Are you sure?');" class="text-danger"> {{ auth::user()->role == 'Admin' ? 'Disapprove' : '' }}</a></td>
            @endif
                   @endforeach
                   @else
                   <h4>No Applicant Request Found</h4>
                   @endif
                 </tr>
               </table> 

        </div>
</div>  <!-- Latest Users ends-->
               {{$employerReq->links()}}

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