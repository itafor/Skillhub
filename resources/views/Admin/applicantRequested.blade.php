@extends('master.dashboard')
@section('content')
@include('master.header')
 <!-- breadcrum start -->

<section id="breadcrum">
  <div class="container">
    <ol class="breadcrum">
      <a href="">Dashboard</a>
    </ol>
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
        <div class="card" style="width: 18rem;">
<h5 class="card-header main-color-bg" style="color: #fff;">Applicant Requested</h5>

  <img class="card-img-top" src="/upload/{{$users->photo}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">
    {{$users->about}}
    </p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><h2> {{$users->name}}</h2></li>
    <li class="list-group-item"><i class="fa fa-intersex"></i>  {{$users->sex}}</li>
    <li class="list-group-item"><i class="fa fa-phone"></i>  {{$users->phone}}</li>
    <li class="list-group-item"><i class="fa fa-envelope"></i>  {{$users->email}}</li>
    <li class="list-group-item"><i class="fa fa-map-marker"></i>  {{$users->state}}</li>
  </ul>
  <div class="card-body">
  @if(count($users->imageproofs))
    @foreach ($users->imageproofs as $image)
<a href="/checkimageproof/{{$image->user_id == '' ? '' : $image->user_id}}" target="_blank">
 {{$image->user_id == '' ? '' : 'Picture Proof'}}</a></span><br>
  @endforeach
@endif

@if(count($users->videos))
    @foreach ($users->videos as $video)
<a href="/checkvideoproof/{{$video->user_id == '' ? '' : $video->user_id}}" target="_blank">
 {{$video->user_id == '' ? '' : 'Video Proof'}}</a></span><br>
  @endforeach
  @endif

  @if(count($users->onlineproofs))
  @foreach ($users->onlineproofs as $online)
<a href="/checkonlineproof/{{$online->user_id == '' ? '' : $online->user_id}}" target="_blank">
 {{$online->user_id == '' ? '' : 'Website URL'}}</a></span><br>
  @endforeach
  @endif
  </div>

        
 
      </div>

    </div>
  </div>
</section>
    <!-- end page content -->


@endsection