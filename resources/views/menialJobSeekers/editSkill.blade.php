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
           <h5 class="card-header main-color-bg" style="color: #fff;">MY SKILLS</h5>
        <div class="card-body">


      <!--POST SKILL FORM STARTS-->
<form  action="{{route('updateskill',[$editskill->id])}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-row">
    <div class="col-md-6 mb-4">
      <label for="validationCustom01">Skill name</label>
     <textarea name="skillname" class="form-control" cols="10">{{$editskill->name}}</textarea>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom04">Description</label>
       <textarea name="skilldescription" class="form-control"  placeholder="I am a good mathematics teacher with outstanding record">{{$editskill->description}}</textarea>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Update Skills</button>
</form>
</div>
</div>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
        
 
      </div><!-- End main content -->

    </div>
  </div>
</section>
    <!-- end page content -->


@endsection