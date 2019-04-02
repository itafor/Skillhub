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
      @include('master.check')

   @include('master.dashboardList')
    </div>
  </div>
</section>
    <!-- end page content -->


@endsection