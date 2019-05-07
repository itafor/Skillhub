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
 
 <div class="card-header main-color-bg">
 <h6  style="color: #000; float:left;"> MY SKILLS</h6>
 <h6 style="float:right;" > <a style="color: #fff;" href="/add-skill"  data-toggle="tooltip" rel="tooltip" data-placement="top" title="Add Skill" class="btn btn-primary btn-sm"><i class="icon fa fa-plus"></i></a></h6>
 </div>
        <div class="card-body">
                  @if(count($skills) > 0)
               <table class="table table-striped table-hover  table-bordered"  >
                 <tr>
                   <th>SKILL NAME</th>
                   <th>SKILL LEVEL</th>
                    <th>DESCRIPTION</th>
                   <th>DATE ADDED</th>
                   <th colspan="2">ACTION</th>
                  
                 </tr>
                  @foreach($skills as $skill)
                
                 <tr>
                   <td>{{$skill->name}}</td>
                   <td>
  <div class="skill-bar"> <div class="progress-bar" style="width: {{$skill->skill_level}}%;">{{$skill->skill_level}}%</div></div>
                   </td>
                   <td>{{$skill->description}}</td>
                   <td>{{ Carbon\carbon::createFromTimestamp(strtotime($skill->created_at))->diffForHumans()}}</td>

              <td> <a href="editskill/{{$skill->id}}" class="text-primary"><i class="fa fa-pencil"></i></a></td>
              <td> <a href="deleteSkill/{{$skill->id}}" class="text-danger" onclick="return confirm('You are about to delete the selected skill, are you sure?')"><i class="fa fa-remove"></i></a></td>

                 
             
                   @endforeach
                   @else
                   <h4>No Skill Found</h4>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script>
            $( document ).ready(function() {
                $('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
            });
        </script>
@endsection