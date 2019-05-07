@extends('master.dashboard')
@section('content')
<div id="showcase">
<div class="section-main container">
<h3 class="text-dark welcomeMessage">Showcase your skills (what you can do better) and get your dream job</h3>
 
  <a href="{{route('register')}}" class="btn btn-primary mb">Get Started</a>

 <h2 class="text-dark">Search Job seekers by Skills or Location</h2>
          <div class="row">
            <div class="col-md-12">
             <div class="col-md-6 pull-left">
              <form action="{{route('searchskill')}}" method="post" id="searchSkillForm"> 
               <input type="hidden" name="_token" value="{{csrf_token()}}">
                   <div class="input-group col-md-8 searchitem">
                      <input class="form-control py-2" type="text" name="searchskill" placeholder="Search by skills"  id="searchskill" autocomplete="off">
                      <div id="skillList"></div>
                        <span class="input-group-append">
                           <button class="btn btn-outline-secondary" type="submit">
                            <i class="fa fa-search">  </i>
                         </button>
                    </span>
                 </div>
          </form>
    </div>

<div class="col-md-6 pull-right ">
  <form action="{{route('searchlocation')}}" method="post" id="searchLocationForm"> 
      <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="input-group col-md-8 searchitem">
              <input class="form-control py-2" type="text" name="searchlocation" placeholder="Search by location"  id="searchlocation" autocomplete="off">
  <div id="locationList"></div>
                  <span class="input-group-append">
                   <button class="btn btn-outline-secondary" type="submit">
                       <i class="fa fa-search">  </i>
                    </button>
                   </span>
                </div>
          </form>
      </div>               
  </div>
</div>
   </div><!--show end-->
</div><!--container end-->
 <!-- breadcrum start -->
   


@if(Auth::user())
<section id="breadcrum">
  <div class="container">
      @include('master.remainder')
  </div>
</section>
@endif
<section id="main" class="text-center" >
  <!-- <div class="container"> -->
    <div class="row applicantsList" >
  <!-- Begin main content -->
@if(count($users) > 0)
<div class="card-columns" >

 @foreach($users as $object)
 <div class="card text-center">
    <img class="card-img-top" src="/upload/{{$object->photo == '' ? 'female.png' : $object->photo}}">
    <div class="card-body">
       <span style="font-family: roboto; font-size: 20px;">{{$object->name}}</span><br>
 <ul>  
<?php $userId = $object->id; 
     $cryptId = Crypt::encrypt($userId);       
?>
  <li> <a href="/jobseekerinfo/{{$cryptId}}" class="text text-danger" style="margin-left: -60px;">View Detail</a> </li>
 
      <span style="margin-left: -20px;">Status: <b>{{$object->status == 'Available'? 'Available' : 'Hired'}}</b></span><br>
      </ul>
  <div class="hireMe btn btn-primary btn-sm"><a href="/requestUser/{{$cryptId}}">{{$object->status == 'Available'? 'HIRE ME' : 'HIRED'}} </a>
   </div>
    </div>
  </div>
  
  @endforeach
</div>
<!-- </div> -->
@else
<h4>Nothing matched your search</h4>
@endif
<span class="pagination">{{$users->links()}}</span>
  </div>
</section>
    <!-- end page content -->
@include('master.footer') 

@endsection
