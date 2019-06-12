@extends('master.dashboard')
@section('content')
@include('master.header')
 <!-- breadcrum start -->
 <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

label{
  float: left;
}
</style>
<section id="breadcrum">
  <div class="container">
    <ol class="breadcrum">
       @if(auth::check())
      @include('master.remainder')
       @endif
    </ol>
  </div>
</section>
       
<section>
  <div class="container">
    <div class="row">
  @if(auth::check())
      @include('master.sideMenu')
  @endif
    <div class="col-md-8 float-right">

<div class="card">
 <div class="card-header">
             <h6 class="float-left">Submit Issues</h6>
             </h6>
           </div> 

        <div class="card-body">

      
<form  action="{{route('addissues')}}" method="POST">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
    <label for="fname">Subject</label>
      <input type="text" name="subject" class="form-control" placeholder="Enter Subject"  required>
   

    <label for="lname">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your phone.">
      
 <label for="lname">Email</label>
      <input type="text" name="email" class="form-control" placeholder="Enter email"  required>


    <label for="subject">Issue</label>
    <textarea id="issues" name="issues" placeholder="Write something.." style="height:200px"></textarea>

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