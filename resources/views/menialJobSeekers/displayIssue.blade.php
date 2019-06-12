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
           <div class="card-header">
             <h6 class="float-left">Issues</h6>
             <h6 class="offset-7"><a href="{{url('get-issues-form')}}"> <i class="fa fa-plus"></i></a></h6>
           </div> 


               <div class="card-body col-md-12">
                  @if(count($getIssue) > 0)
               <table class="table table-hover table-bordered table-responsive" style="width: 100%;" >
                 <thead class="thead-dark">
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Issues</th>
    </tr>
  </thead>
    @foreach($getIssue as $issue)
    <tbody>
    <tr>
      <td>{{$issue->subject}}</td>
      <td>{{$issue->phone}}</td>
      <td>{{$issue->email}}</td>
      <td>{{$issue->issues}}</td>
    </tr>
  </tbody>
       @endforeach
                   @else
                   <h4>No job found</h4>
                   @endif
               
               </table> 
               {{$getIssue->links()}}
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