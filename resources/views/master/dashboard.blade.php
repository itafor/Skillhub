<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admin Area | Dashboard </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <link href="{{ asset('bootstrapcss/style.css') }}" rel="stylesheet">
 <link href="{{ asset('bootstrapcss/jquery.datetimepicker.min.css') }}" rel="stylesheet">
    <!-- ckeditor -->
 <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

 <style>
 .invalid-feedback{
     color: brown;
 }
</style>
  </head>
  <body>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="{{url('/')}}">SkillsHub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="{{url('add-skill')}}">Post Skills </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('request-Job-seekers')}}">Request-Job-Seekers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
          

           <ul class="navbar-nav navbar-right">
              @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Signup</a>
            </li>
            @else
            <!-- usermenu start -->
            <li class="nav-item">
              <span  style="margin-right: 20px;">{{auth::user()->role}}</span>
            </li>
            <li class="nav-item">
<div class="dropdown create">
           <span class="dropdown-toggle" type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img  src="/upload/{{auth::user()->photo == '' ? 'female.png' : auth::user()->photo}}" style="width: 40px; height: 40px; border-radius: 50%; border:1px solid #fff; margin-right: 50px">
        </span>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="{{url('editProfile')}}"><i class="fa fa-user"></i> My Profile</a>

         <a class="dropdown-item" href="{{url('profilePicture')}}"><i class="fa fa-list-alt"></i> Profile Picture</a>
          <a class="dropdown-item" href="#"><i class="fa fa-pencil"></i> Add Post</a>
      </div>
  </div>
            </li> <!-- usermenu end -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
           @endguest 
        </div>
      </nav>

@include('inc.success')
@include('inc.errors') 
     
 @yield('content')

  <!-- Footer -->

<footer class="footer">
      <div class="container">
        <p>Copyright Adminstrap &copy; 2018</p>
      </div>
    </footer>

  <!-- Modal -->
<div class="modal fade" id="addpage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
        <label>Page Title</label>
        <input type="text"  name="" class="form-control" placeholder="Page Title">
      </div>


      <div class="form-group">
        <label>Page body</label>
          <textarea name="editor1" class="form-control" placeholder="Body"></textarea>
      </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="">Published
          </label>
        </div>

        <div class="form-group">
        <label>Meta Tags</label>
          <input type="" name="tags" class="form-control" placeholder="Add some Meta Tags">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script type="text/javascript" src="bootstrapjs/jquery.datetimepicker.full.js">
  
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#sendSMS').hide();
$('.dynamic').change(function() {
if($(this).val() !=''){
    var select = $(this).attr('id');
    var value = $(this).val();
    var dependent =$(this).data('dependent');
    var _token = $('input[name="_token"]').val();

    $.ajax({
    url: "{{route('dynamicdependent.fetch')}}",
    method: 'POST',
    data: {select:select, value:value, dependent:dependent, _token:_token},
    success: function(result){
        $('#'+dependent).html(result);
    }
    });
}
});

$('#fullDetailSMS').click(function(){
    $('#sendSMS').show();
});

$('#cancelSMS').click(function(){
    $('#sendSMS').hide();
});

    });

    $('#datetimepicker').datetimepicker();
    </script>

<script>
      CKEDITOR.replace( 'editor1' );
    </script>



    <script type="text/javascript">

    $('.addRow').on('click',function(){
        addRow();
    });

    function addRow(){
var tr= '<tr>'+
        '<td><textarea type="text" name="post1[]" id="post1" class="form-control post1"></textarea></td>'+
        '<td><textarea type="text" name="post2[]" id="post2" class="form-control post2"></textarea></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="fa fa-minus"></i></a></td>'+
   ' </tr>';
   ' </tr>';
    $('tbody').append(tr);
    }


    $('body').delegate('.remove','click',function(){
        var l=$('tbody tr').length;
        if(l==1){
alert('You can not remove last row');
        }else{
        $(this).parent().parent().remove();
        }
    });

    </script>


    <script type="text/javascript">
  document.getElementById('searchSkillForm').addEventListener('submit',checkInput);

 function  checkInput(e) {
  let searchskill = document.getElementById('searchskill').value;

  if(!searchskill) {
    alert('Please enter search keyword for skill');
    e.preventDefault();
    return false;
  }
  return true;
  }


  document.getElementById('searchLocationForm').addEventListener('submit',checkLocation);

 function  checkLocation(e) {
  let searchlocation = document.getElementById('searchlocation').value;

  if(!searchlocation) {
    alert('Please enter search keyword for location');
    e.preventDefault();
    return false;
  }
  return true;
  }
</script>
  </body>
</html>
