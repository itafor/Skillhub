<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  <link rel="stylesheet" href="css/style.css">
  <title>Welcome to myTunes</title>
</head>
<body>


  <!-- Showcase & Nav -->
  <div id="showcase">
    <header>
      <nav class='cf'>
        <ul class='cf'>
          <li class="hide-on-small">
            <a href="#showcase">SkillsHub</a>
          </li>
          <li>
              <a href="{{url('add-skill')}}">Post Skills </a>
            </li>
          <li>
              <a  href="{{url('request-Job-seekers')}}">Employers</a>
            </li>
          <li>
              <a  href="#">About</a>
            </li>
          <li>
              <a  href="#">Services</a>
            </li>
        <!-- </ul> -->


           <!-- <ul class="navbar-nav navbar-right"> -->
              @guest
            <li class="pull-right">
              <a  href="{{ route('login') }}">Login</a>
            </li>
            <li >
              <a  href="{{ route('register') }}">Signup</a>
            </li>
            @else
            <!-- usermenu start -->
            <li >
              <span  style="margin-right: 20px;">{{auth::user()->role}}</span>
            </li>
            <li >
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
            <li>
              <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
           @endguest 

        <a href='#' id='openup'>myTunes</a>
      </nav>
    </header>
    <div class="section-main container">
      <h1>myTunes.</h1>
      <h2>Your music, movies, and TV shows take center stage.</h2>
      <p class="lead hide-on-small">
        myTunes is the best way to organize and enjoy the music, movies, and TV shows you already have — and shop for the ones you
        want. Enjoy all the entertainment myTunes has to offer on your Mac and PC.
      </p>
    </div>
  </div>

@include('inc.success')
@include('inc.errors') 
     
 @yield('content') 


  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-cols">
        <ul>
          <li>Shop & Learn</li>
          <li>
            <a href="#">Music</a>
          </li>
          <li>
            <a href="#">Movies</a>
          </li>
          <li>
            <a href="#">Shows</a>
          </li>
          <li>
            <a href="#">Apps</a>
          </li>
          <li>
            <a href="#">Gift Cards</a>
          </li>
        </ul>

        <ul>
          <li>Orange Store</li>
          <li>
            <a href="#">Find a Store</a>
          </li>
          <li>
            <a href="#">Today at Orange</a>
          </li>
          <li>
            <a href="#">Orange Camp</a>
          </li>
          <li>
            <a href="#">Financing</a>
          </li>
          <li>
            <a href="#">Order Status</a>
          </li>
        </ul>

        <ul>
          <li>Education & Business</li>
          <li>
            <a href="#">Orange & Education</a>
          </li>
          <li>
            <a href="#">Shop For College</a>
          </li>
          <li>
            <a href="#">Orange & Business</a>
          </li>
          <li>
            <a href="#">Shop For Business</a>
          </li>
          <li>
            <a href="#">Jobs</a>
          </li>
        </ul>

        <ul>
          <li>About Orange</li>
          <li>
            <a href="#">Newsroom</a>
          </li>
          <li>
            <a href="#">Orange Leadership</a>
          </li>
          <li>
            <a href="#">Investors</a>
          </li>
          <li>
            <a href="#">Events</a>
          </li>
          <li>
            <a href="#">Contact Orange</a>
          </li>
        </ul>

      </div>
    </div>
    <div class="footer-bottom text-center">
      Copyright &copy; 2018 Orange myTunes
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="js/main.js"></script>



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


<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>

<script type="text/javascript">
$(function() {
    $(".chzn-select").chosen();
});
</script>
</body>

</html>