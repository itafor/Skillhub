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
           <h5 class="card-header main-color-bg" style="color: #fff;">All Employers: {{count($allEmployers)}}</h5>
        <div class="card-body">
                  @if(count($allEmployers) > 0)
               <table class="table table-striped table-hover table-responsive table-bordered"  >
                 <tr>
                   <th>REG.DATE</th>
                   <th>NAME</th>
                   <th>GENDER</th>
                   <th>PHONE</th>
                   <th>EMAIL</th>
                   <th>VIEW MORE</th>
                   <th>DELETE</th>
                 </tr>
                  @foreach($allEmployers as $allEmployer)
                
                 <tr>
                  <td>{{ Carbon\carbon::createFromTimestamp(strtotime($allEmployer->created_at))->diffForHumans()}}</td>
                   <td>{{$allEmployer->name}}</td>
                   <td>{{$allEmployer->sex}}</td>
                   <td>{{$allEmployer->phone}}</td>
                   <td>{{$allEmployer->email}}</td>
                   

              <td> <a href="viewEmployer/{{$allEmployer->id}}" class="text-primary"><i class="fa fa-eye"></i> Details</a></td>
              <td> <a href="deleteEmployer/{{$allEmployer->id}}" class="text-danger" onclick="return confirm('You are about to delete the selected Employer, are you sure?')"><i class="fa fa-remove"></i></a></td>

                 
             
                   @endforeach
                   @else
                   <h4>No employer Found</h4>
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