 <div class="col-md-3">
        <ul class="list-group">
           <!-- <li class="list-group-item active main-color-bg"><i class="fa fa-cog"></i> Dashboard</li> -->
          <!--   Admin  menus -->
          <?php $totalImageProof = count(auth::user()->imageproofs)?>
          <?php $totalReq = count(auth::user()->employers)?>
         
            <?= auth::user()->role == 'Admin' ? 
           '<li class="list-group-item">  <a href="/adminViewEmpAppReq"> Request  </a> </li>
           <li class="list-group-item">  <a href="/sharedjobs"> Shared Jobs  </a> </li>
           <li class="list-group-item"><a href="/emprequest"> Hiring  </a></li>
           <li class="list-group-item">  <a href="/all-employers"> Employers </a></li>
           <li class="list-group-item"> <a href="/all-applicants"> Applicants  </a></li>
           ' : '' ?>
         
          <!--   Employers  menus -->
           
           <?= auth::user()->role == 'Employer' ? '<li class="list-group-item"> <i class="fa fa-plus"></i> <a href="/request-Job-seekers" >Request Applicants</a></li>
           <li class="list-group-item"> <i class="fa fa-eye"></i> <a href="/empAppReq">My Requests <span class="badge badge-secondary">  </span> </a></li>' : ''?>

          <!--   Applicants menus -->
            
           <?= auth::user()->role == 'Applicant' ? "
            <li class='list-group-item'>  <a href='/sharedjobs'> Shared Jobs  </a> </li>


               <li class='list-group-item'> <a href='/viewSkills'> My Skills </a></li>

           <li class='list-group-item'> <a href=''> Add Gurantor  </a></li>

           <li class='list-group-item'>  <a href=''> Gurantors <span class='badge badge-secondary' ></span> </a></li>

         
            
        <li class='list-group-item'>  <a href='/getCV'> CV  </a></li>

        <li class='list-group-item'> <a href=''> My CV  </a></li>

        <h4 style='color:#ffffff; background:#000000;'>Proof of Skills</h4>
          <li class='list-group-item'> <a href='/websiteProof'>Add websiteProof URL</a></li> 

          <li class='list-group-item'>  <a href='/viewWebsiteProof'>View websiteProofs</a></li> 

          <li class='list-group-item'>  <a href='/imageProof'>Add Image Proof  </a></li>

          <li class='list-group-item'> <a href='/viewImageProof'>View Images <span class='badge badge-secondary'> $totalImageProof </span> </a></li>


 <li class='list-group-item'>  <a href='/videoProof'>Add video Proof  </a></li>

          <li class='list-group-item'>  <a href='/viewVideoProof'>View Video </a></li>


           " : '' ?>

    </ul>
 </div>
