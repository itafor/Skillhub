@extends('master.dashboard')
@section('content')
@include('master.header')
 <!-- breadcrum start -->
<section id="breadcrum">
  <div class="container">
    <ol class="breadcrum">
      @include('master.remainder')
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
  
    <div class="col-md-9">

<div class="card">
           <h5 class="card-header main-color-bg" style="color: #fff;">Add Skill</h5>
        <div class="card-body">

      <!--POST SKILL FORM STARTS-->
<form  action="{{route('addskill')}}" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-row">
    <div class="col-md-6 mb-4">
      <label for="validationCustom01">Skill name</label>
      <input type="text" name="skillname" class="form-control" placeholder="Enter skill e.g. web developer"  required>
    </div>

    <div class="col-md-6 mb-4">
      <label for="validationCustom01">Skill name</label>
      <select type="text" name="skill_level" class="form-control" placeholder="Enter Skill Level" required>
        <option value="0">Select Skill Level</option>
        <option value="20">20% of 100%</option>
        <option value="40">40% of 100%</option>
        <option value="60">60% of 100%</option>
        <option value="80">80% of 100%</option>
        <option value="100">100% of 100%</option>
      </select>  
    </div>

  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label>Describe your skill</label>
    <textarea name="skilldescription" class="form-control"  placeholder="I am a good mathematics teacher with outstanding record" required="required"></textarea>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Submit form</button>
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