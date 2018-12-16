<ul class="breadcrum">
	
      @if(auth::user()->role == 'Applicant')

	
	<?= count($userSkill) > 0 ? '' : '<li><h4>Employers want to see your skills please <a href="/add-skill" style="color:brown;">add your skills </a></h4> </li>' ?>
  

     <?= auth::user()->photo == ''? ' <li> <h4>Your chances of being employed is high when you add a profile picture. <a href="/profilePicture" style="color:brown;">Upload profile picture</a></h4></li>' : '' ?>
      
  <?= auth::user()->state == ''? ' <li> <h4>Please <a href="/editProfile" style="color:brown;">add your state of residents</a> It helps Employers know where you resides</h4> </li>' : '' ?>

  
   
      @endif
    </ul>
