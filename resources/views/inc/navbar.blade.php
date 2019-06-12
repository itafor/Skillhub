
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="{{url('/')}}" class="logo" style="font-weight: 3px; font-size: 18px; margin-top: -14px">MySkillsHub</a>

      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      
       <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto offset-10" >
            
            @if(!auth::check())
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Signup</a>
            </li>
            @endif
          </ul>
         </div> 


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


             <a class="dropdown-item" href="{{url('get-issues-form')}}"><i class="fa fa-bug"></i> Issue ?</a>

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

   <div>
           <ul class="navbar-nav navbar-right desktopView">
              @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Signup</a>
            </li>
              <li class="nav-item">
             <a class="dropdown-item" href="{{url('get-issues-form')}}"><i class="fa fa-bug"></i> Issue ?</a>
           </li>
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
  @if(auth::user()->role == 'Applicant')
   <a href="/my-profile/{{auth::user()->id}}"  class="dropdown-item" ><i class="fa fa-user"></i> My Profile</a> 
 @endif
     <a class="dropdown-item" href="{{url('editProfile')}}"><i class="fa fa-pencil"></i> Edit Profile</a>
         
         <a class="dropdown-item" href="{{url('profilePicture')}}"><i class="fa fa-list-alt"></i> Profile Picture</a>

          <a class="dropdown-item" href="{{url('get-issues-form')}}"><i class="fa fa-bug"></i> Issue ?</a>
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
