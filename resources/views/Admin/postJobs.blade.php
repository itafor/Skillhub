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

<div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">Workers Request Form</h5>
        <div class="card-body">


      <!--Request for job seekers FORM   -->
<form novalidate method="POST" action="{{route('postJobs')}}">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

   
  <div class="form-row">
   
     
    
<div class="col-lg-12 col-sm-12 ">

 <label for="validationCustom03">Say Something</label>
    
      <textarea name="description" class="form-control" placeholder=" Say something" cols="5" rows="5"></textarea>


      <h3>Enter the heading in the first row</h3>
        <table class="table table-bordered">
            <thead>
                <th>JOB URL</th>
                <th>JOB TITLE</th>
               
                <th style="text-align:center;"><a href="#" class="btn btn-default addRow"><i class="fa fa-plus"></i></a></th>
            </thead>
            <tbody>
                <tr>
                    <td><textarea type="text" name="post1[]" id="post1" class="form-control post1"></textarea></td>
                    <td><textarea type="text" name="post2[]" id="post2" class="form-control post2"></textarea></td>

                    <td><a href="#" class="btn btn-danger remove"><i class="fa fa-minus"></i></a></td>
                </tr>
            </tbody>
                <tfoot>
                    <td style="border:none"></td>
                    <td style="border:none"></td>
                </tfoot>
            </table>
        </div>
 
  </div>
  <button class="btn btn-primary" type="submit">Post Jobs</button>
</form>
</div>
</div>

        
 
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->

@endsection