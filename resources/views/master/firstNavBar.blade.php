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
    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
  
    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/style.css">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <link href="{{ asset('bootstrapcss/style.css') }}" rel="stylesheet">
 <link href="{{ asset('bootstrapcss/jquery.datetimepicker.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
   
	<title>Nav Bar</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<style type="text/css">
		/**{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
		}*/
		nav{
      padding-top: 7px;
			display: flex;
			justify-content: space-around;
			align-items: center;
			min-height: 8vh;
			background-color: #000;
			font-family: 'Poppins', sans-serif;
		}
		.logo{
			color: rgb(226,226,226);
			text-transform: uppercase;
			letter-spacing: 5px;
			font-size: 20px;
		}
		.nav-links{
			display: flex;
			justify-content: space-around;
			width: 50%;
		}
		.nav-links li{
			list-style: none;

		}
		.nav-links a{
			color: rgb(226,226,226);
			text-decoration: none;
			/*letter-spacing: 1px;*/
			font-weight: bold;
			font-size: 14px;


		}

   /* .nav-links li a{
     margin-right: 5px;

    }*/

		.burger div{
			width: 25px;
			height: 2px;
			margin: 5px;
			background-color: rgb(226,226,226);
			transition: all 0.3s ease;
			}
			.burger{
				display: none;
			}

		   @media screen and (max-width: 1024px){
				.nav-links{
					width: 60%;
				}
			}

			@media screen and (max-width: 500px){
				body{
					overflow-x: hidden;
				}
				.nav-links{
					position: absolute;
					right: 0px;
					height: 92vh;
					top: 8vh;
					background-color: #000000;
					display: flex;
					flex-direction: column;
					align-items: center;
					width: 30%;
					transform: translateX(100%);
					transition: transform 0.5s ease-in;
          z-index: 1;
				
				}
				.nav-links li{
					opacity: 0;
				}
				.nav-links li a{
					
				}
				.burger{
					display: block;
					cursor: pointer;
				}
				
			}
			.nav-active{
					transform: translateX(0%);
				}

				@keyframes navLinkFade{

					from{
						opacity: 0;
						transform: translateX(50px;);
					}

					to{
						opacity: 1;
						transform translateX(0px);
					}

				}
				.toggle .line1{
					transform: rotate(-45deg) translate(-5px,6px);
				}
				.toggle .line2{
					opacity: 0;
				}
				.toggle .line3{
					transform: rotate(45deg) translate(-5px,-6px);
				}
	</style>
</head>
<body>
<nav>
	<div class="logo">
	<h4><a  href="{{url('/')}}">SKILL Hub</a></h4>
	</div>
	@if(!auth::user())
	<ul class="nav-links">
		<li><a  href="{{ route('register') }}" class="first">Sign up</a></li>
		<li><a  href="{{ route('login') }}">Login</a></li>
		<li><a  href="{{url('add-skill')}}">Applicants</a></li>
		<li><a href="{{url('request-Job-seekers')}}">Employers</a></li>
		<!-- <li><a href="#">Service</a></li>
		<li><a href="#">Contact</a></li> -->
	</ul>
	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>
	@else

	<ul class="navbar-nav navbar-right mobileview">
            <!-- usermenu start MObile view -->
          @if(auth::check())
  <div class="dropdown" style="margin-left: 100px;">
      <span>
       <img  src="/upload/{{auth::user()->photo == '' ? 'female.png' : auth::user()->photo}}" style="width: 40px; height: 40px; border-radius: 50%; border:1px solid #fff; margin-right: 50px">
    </span>
     <div class="dropdown-content" style="margin-left: -100px; border-radius: 20px; padding-left: -80px;">
    
   
     @if(auth::user()->role == 'Applicant')
  <a href="{{url('add-skill')}}"  class="dropdown-item" ><i class="fa fa-plus"></i> Add skill</a> 
          @endif
       <a href="/my-profile/{{auth::user()->id}}"  class="dropdown-item" ><i class="fa fa-user"></i> My Profile</a> 
   
        <a class="dropdown-item" href="{{url('editProfile')}}"><i class="fa fa-pencil"></i> Edit Profile</a>
       <a class="dropdown-item" href="{{url('profilePicture')}}"><i class="fa fa-list-alt"></i> Profile Picture</a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 <i class="fa fa-list-alt"></i> {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
    </div>
</div>
</ul>
      @endif


			<ul class="nav-links">
		
		<li><a  href="{{url('add-skill')}}">Applicants</a></li>
		<li><a href="{{url('request-Job-seekers')}}">Employers</a></li>
		<!-- <li><a href="#">Service</a></li>
		<li><a href="#">Contact</a></li> -->
	</ul>
	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>
	@endif



	<div>
           <ul class="navbar-nav navbar-right desktopView">
              @guest
            <!-- <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Signup</a>
            </li> -->
            @else
            <!-- usermenu start -->
            <li class="nav-item">
              <!-- <span  style="margin-right: 20px; color:#ffffff"> {{ auth::user()->name}} ({{auth::user()->role}})</span> -->
            </li>
            <li class="nav-item">
<div class="dropdown create">
           <span class="dropdown-toggle" type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img  src="/upload/{{auth::user()->photo == '' ? 'female.png' : auth::user()->photo}}" style="width: 40px; height: 40px; border-radius: 50%; border:1px solid #fff; margin-right: 50px">
        </span>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         
          @if(auth::user()->role == 'Applicant')
  <a href="{{url('add-skill')}}"  class="dropdown-item" ><i class="fa fa-plus"></i> Add skill</a> 
          @endif

   <a href="/my-profile/{{auth::user()->id}}"  class="dropdown-item" ><i class="fa fa-user"></i> My Profile</a> 

     <a class="dropdown-item" href="{{url('editProfile')}}"><i class="fa fa-pencil"></i> Edit Profile</a>
         
         <a class="dropdown-item" href="{{url('profilePicture')}}"><i class="fa fa-list-alt"></i> Profile Picture</a>
				 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                 <i class="fa fa-list-alt"></i> {{ __('Logout') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
		  </div>
  </div>
            </li> <!-- usermenu end -->
            
          </ul>
           @endguest 
        </div>



</nav>



        
@include('inc.success')
@include('inc.errors') 
     
 @yield('content')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script type="text/javascript" src="bootstrapjs/jquery.datetimepicker.full.js">
  
</script>

<!-- auto select state and lga -->
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
<!-- auto search by location -->
    <script>
$(document).ready(function(){
  $('#searchlocation').keyup(function(){
    var searchlocat=document.querySelector('#searchlocation')
    console.log(searchlocat.value)
    var query=$(this).val();
    if(query!==''){
      var _token = $('input[name="_token"').val();
      $.ajax({
        url:"{{ route('autocomplete.fetch')}}",
        method:"POST",
        data:{query:query, _token:_token},
        success:function(data){
          console.log(data)
          $('#locationList').fadeIn();
          $('#locationList').html(data);
        }
      })
    }
  }); 

  $(document).on('click', 'li', function(e){  
        $('#searchlocation').val($(this).text());  
        $('#locationList').fadeOut();  
    });  
 
});

</script>

<!-- auto search by skills -->
    <script>
$(document).ready(function(){
  $('#searchskill').keyup(function(){
    var searchskills=document.querySelector('#searchskill')
    
    var query2=$(this).val();
    if(query2!==''){
      var _token = $('input[name="_token"').val();
      $.ajax({
        url:"{{ route('autocomplete.fetchskill')}}",
        method:"POST",
        data:{query2:query2, _token:_token},
        success:function(user){
          console.log(user)
          $('#skillList').fadeIn();
          $('#skillList').html(user);
        }
      })
    }
  }); 

  $(document).on('click', 'li', function(e){  
        $('#searchskill').val($(this).text());  
        $('#skillList').fadeOut();  
    });  
 
});

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

<!-- navigation script -->
<script type="text/javascript">
	const navSlide= () => {
	const burger = document.querySelector(".burger");
	const nav = document.querySelector(".nav-links");
	const navLnks = document.querySelectorAll(".nav-links li");

	burger.addEventListener("click",() => {
		nav.classList.toggle("nav-active")

//animate links
		navLnks.forEach( (link,index) => {
		if(link.style.animation){
			link.style.animation = '';
		}else{
			link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;//adding delay
		}

		});
		//burger animation
		burger.classList.toggle("toggle");
	});


}
navSlide();
</script>
</body>
</html>