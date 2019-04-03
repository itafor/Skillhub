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
        <!-- Latest Users start-->
 <div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">REQUESTED APPLICANTS FROM EMPLOYERS</h5>
        <div class="card-body">
               <table class="table table-bordered table-hover table-responsive" >
                 <tr>
                   <th>NAME</th>
                   <th>EMAIL</th>
                   <th>PHONE</th>
                   <th>SKILLS NEEDED</th>
                   <th>DESCRIPTION</th>
                   <th>APPLICANT REQUESTED</th>
                   <th>ACTION</th>
                 </tr>
                  @foreach($requestedApplicants as $request)

                 <tr>
                   <td>{{$request->empName}}</td>
                   <td>{{$request->empEmail}}</td>
                   <td>{{$request->empphone}}</td>
                   <td><p>{{$request->skills}}</p></td>
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