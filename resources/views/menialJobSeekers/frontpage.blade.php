@extends('master.dashboard')
@section('content')

 <header id="header">
        <div class="container"> 
          <div class="row">
            <div class="col-md-12">
              <h2><i class="fa fa-cog"></i> Dashboard <small>Manage your Site</small></h2>
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
<section id="main">
  <div class="container">
    <div class="row">
  <!-- Begin main content -->

<div class="card-columns">
 @foreach($users as $object)
 <div class="card text-center">
    <img class="card-img-top" src="/upload/{{$object->photo}}" alt="Applicants profile picture">
    <div class="card-body">
       <span>{{$object->name}}</span><br>
    <span><i class="fa fa-map-marker"></i> {{$object->state}}</span><br>
 <span><i class="fa fa-graduation-cap"></i> {{$object->qualification}}</span><br>
   
    <span><i class="fa fa-tasks"></i><a href="#"> CV</a> </span><br>
    
 <ul>  

  <li> <a href="/jobseekerinfo/{{$object->id}}" class="text text-danger" style="font-size: 16px; font-family: sans-serif; text-decoration: none;">View Skills & Proofs</a> </li>
     <!-- <li> -->
     <!-- <h5 class="card-title">PROOFS</h5>
     </li>
  @foreach ($object->videos as $video)
<li>
<a href="/checkvideoproof/{{$video->user_id == '' ? '' : $video->user_id}}" target="_blank">
 {{$video->user_id == '' ? '' : 'Video Proof'}}</a></span><br>
</li>
  @endforeach
 
 @foreach ($object->imageproofs as $image)
<li>
<a href="/checkimageproof/{{$image->user_id == '' ? '' : $image->user_id}}" target="_blank">
 {{$image->user_id == '' ? '' : 'Picture Proof'}}</a></span><br>
</li>
  @endforeach -->

 <!--  @foreach ($object->onlineproofs as $online)
<li>
<a href="/checkonlineproof/{{$online->user_id == '' ? '' : $online->user_id}}" target="_blank">
 {{$online->user_id == '' ? '' : 'Website URL'}}</a></span><br>
</li>
  @endforeach -->
              </ul>
      <span>Status: <b>{{$object->status == 'Available'? 'Available' : 'Hired'}}</b></span><br>
  <div class="hireMe btn btn-primary"><a href="/requestUser/{{$object->id}}">{{$object->status == 'Available'? 'HIRE ME' : 'HIRED'}} </a>

   </div>
    </div>
  </div>
  @endforeach


</div>
</div>
{{$users->links()}}
  </div>
</section>
    <!-- end page content -->


@endsection