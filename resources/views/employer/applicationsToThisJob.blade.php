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
           <h5 class="card-header main-color-bg" style="color: #fff;"> {{count($applicationsToThisJob)}} people have applied for this job</h5>
        <div class="card-body">
                  @if(count($applicationsToThisJob) > 0)
               <table class="table table-striped table-hover" >
                 <tr>
                
                   <th>Job</th>
                   <th>Applicant</th>
                   <th>Date</th>
                 </tr>
                  @foreach($applicationsToThisJob as $req)
                
                 <tr>
              <td> <a href="/viewSpecificEmpReq/{{$req->job_id}}" target="_blank">job details</a></td>
                   
              <td> <a href="/jobseekerinfo/{{$req->user_id}}" target="_blank">Applicant details</a></td>

              <td>{{ Carbon\carbon::createFromTimestamp(strtotime($req->created_at))->diffForHumans()}}</td>

                   @endforeach
                   @else
                   <h4>No applicants found</h4>
                   @endif
                 </tr>
               </table> 

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