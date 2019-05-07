
<header id="header" >
        <div class="container"> 
          <div class="row">
            <div class="col-md-4 offset-4" style="margin-top:20px;">
            @if(auth::user())
            <span  id="welcomeUser" >Welcome {{ auth::user()->name}} ({{auth::user()->role}})</span>
            @endif
        
            </div>
          </div>
        </div>
    </header>