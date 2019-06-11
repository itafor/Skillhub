 
        <div class="card-columns">
          
          <!--   Admin  menus -->
          <?php $totalImageProof = count(auth::user()->imageproofs)?>
          <?php $skills = count(auth::user()->skills)?>
          <?php $totalReq = count(auth::user()->employers)?>
          <?php  $reqJobs = count($requestedJobs)?>
          <?php  $employerJobReq = count($employerJobReq)?>
          <?php  $employers = count($employers)?>
          <?php  $applicants = count($applicants)?>
          <?php  $sharedjobs = count($sharedjobs)?>
         <?php $id = auth::user()->id ;?>
        
            <?= auth::user()->role == 'Admin' ? 
           "<div class='card'>

            <div class='card-body'>
              <div class='well dash-box'>
      <h2> <i class='fa fa-pencil'></i> <span class='badge badge-secondary'>$reqJobs</span>  </h2>
          <a href='/adminViewEmpAppReq'> <h4>Requests</h4> </a>
                    
                </div>
              </div>
          </div>

       <div class='card'>
          <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-user'></i>
                    <span class='badge badge-secondary'>$employers</span> 
                      </h2>
                    
          <a href='/all-employers'> <h4>Employers</h4> </a>

                </div>
            </div>
        </div>

           <div class='card'>
            <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-bar-chart'></i>
                    <span class='badge badge-secondary'>$applicants</span> 
                     </h2>
                    
          <a href='/all-applicants'> <h4> Applicants</h4> </a>

                  </div>
              </div>
          </div>" : '' ?>
         
          <!--   Employers  menus -->
           
           <?= auth::user()->role == 'Employer' ?  "<div class='card'>

            <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-pencil'></i>
                    <span class='badge badge-secondary'>$employerJobReq</span> 
                     </h2>
          <a href='/request-Job-seekers'> <h4> Make Requests</h4> </a>
                    
                </div>
              </div>
          </div>

       <div class='card'>
          <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-bar-chart'></i>  
                    <span class='badge badge-secondary'>$employerJobReq</span> 

                    </h2>
                    
          <a href='/empAppReq'> <h4>My Requests</h4> </a>

                </div>
            </div>
        </div>

           <div class='card'>
            <div class='card-body'>
              <div class='well dash-box'>
        <h2> <i class='fa fa-user'> </i> <i class='fa fa-pencil'></i></h2>
                    
          <a href='/editProfile'> <h4> Profile</h4> </a>

                  </div>
              </div>
          </div>" : ''?>

          <!--   Applicants menus -->
            
           <?= auth::user()->role == 'Applicant' ? "<div class='card'>

            <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-bar-chart'></i>
                    <span class='badge badge-secondary'>$sharedjobs</span> 
                      </h2>
          <a href='/sharedjobs'> <h4>Shared Jobs</h4> </a>
                    
                </div>
              </div>
          </div>

       <div class='card'>
          <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-eye'></i>   
                    <span class='badge badge-secondary'>$skills</span> 

                    </h2>
                    
          <a href='/viewSkills'> <h4>My Skills</h4> </a>

                </div>
            </div>
        </div>

           <div class='card'>
            <div class='card-body'>
              <div class='well dash-box'>
                    <h2> <i class='fa fa-pencil'></i> <i class='fa fa-user'></i> </h2>
                    
          <a  href='/my-profile/$id'> <h4> Profile</h4> </a>

                  </div>
              </div>
          </div>" : ''?>

   
 </div>
