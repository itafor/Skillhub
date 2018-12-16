<ul class="breadcrum col-md-12">
 
 

  	<a href="/admindashboard" style="width: 100px; height:70px; font-size: 20px; border-radius: 5px; background: #c0392b; color: #ffffff;">DASHBOARD</a>


  
<small class="offset-6">
					@if(auth::user()->role == 'Applicant')
				<small style="font-size: 16px;">Employment Status:		{{auth::user()->status}} </small> <a href="/editProfile"><li class="fa fa-pencil"></li></a>
					@endif
  
	
</small>
	
    </ul
