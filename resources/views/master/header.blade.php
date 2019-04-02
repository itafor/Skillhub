
<header id="header" >
        <div class="container"> 
          <div class="row">
            <div class="col-md-4 offset-8" style="margin-top:20px;">
            @if(auth::user())
            <span  style="color:#ffffff">Welcome {{ auth::user()->name}} ({{auth::user()->role}})</span>
            @endif
        
            </div>
          </div>
        </div>
    </header>