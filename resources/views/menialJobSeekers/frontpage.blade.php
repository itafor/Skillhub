@extends('master.dashboard')
@section('content')

 <header id="header">
        <div class="container"> 
          <div class="row">
            <div class="col-md-12  ">
             

             <div class="col-md-6 pull-left">
              <form action="{{route('searchskill')}}" method="post" id="searchSkillForm"> 
               <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="input-group col-md-8 searchitem">
              <input class="form-control py-2" type="searchskill" name="searchskill" placeholder="Search by skills"  id="searchskill">
                  <span class="input-group-append">
                   <button class="btn btn-outline-secondary" type="submit">
                       <i class="fa fa-search">
                       </i>
                  </button>
            </span>
        </div>
        </form>

             </div>



<div class="col-md-6 pull-right ">
  <form action="{{route('searchlocation')}}" method="post" id="searchLocationForm"> 
               <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="input-group col-md-8 searchitem">
              <input class="form-control py-2" type="searchlocation" name="searchlocation" placeholder="Search by location" ="" id="searchlocation">
                  <span class="input-group-append">
                   <button class="btn btn-outline-secondary" type="submit">
                       <i class="fa fa-search">
                       </i>
                  </button>
            </span>
        </div>
        </form>

             </div>               
            
             
            </div>
          </div>
        </div>
    </header>

 <!-- breadcrum start -->
@if(Auth::user())
<section id="breadcrum">
  <div class="container">
      @include('master.remainder')
  </div>
</section>
@endif
        <!-- breadcrum ends -->

  <!-- Begin page content -->
<section id="main" class="text-center">
  <div class="container">
    <div class="row " >
  <!-- Begin main content -->
@if(count($users) > 0)
<div class="card-columns">
 @foreach($users as $object)
 <div class="card text-center">
    <img class="card-img-top" src="/upload/{{$object->photo}}" alt="Applicants profile picture">
    <div class="card-body">
       <span>{{$object->name}}</span><br>
       <span>{{$object->role}}</span><br>
    <span><i class="fa fa-map-marker"></i> {{$object->state}}</span><br>
 <span><i class="fa fa-graduation-cap"></i> {{$object->qualification}}</span><br>
   
    <span><i class="fa fa-tasks"></i><a href="#"> CV</a> </span><br>
    
 <ul>  

  <li> <a href="/jobseekerinfo/{{$object->id}}" class="text text-danger" style="font-size: 16px; font-family: sans-serif; text-decoration: none;">View Skills & Proofs</a> </li>
     
 
              </ul>
      <span>Status: <b>{{$object->status == 'Available'? 'Available' : 'Hired'}}</b></span><br>
  <div class="hireMe btn btn-primary"><a href="/requestUser/{{$object->id}}">{{$object->status == 'Available'? 'HIRE ME' : 'HIRED'}} </a>

   </div>
    </div>
  </div>
  @endforeach


</div>
</div>
@else
<h4>Nothing matched your search</h4>
@endif
{{$users->links()}}
  </div>
</section>
    <!-- end page content -->


@endsection
