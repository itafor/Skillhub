<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
	
<p>
Dear {{ $name }} , <br><br>


<b>Available job as at now</b> <br><br>
 
 <b>Job Title  </b> : <br> {{$jobTitle}}<br><br>
 <b>Skills Required  </b> : <br> {{$skillsReq}}<br><br>
 <b>Job Requirements </b> : <br> {{$jobReq}}<br><br>
 <b>Responsibilities </b> : <br> {{$jobResp}}<br><br>

<div><a href="http://localhost:8000/viewSpecificEmpReq/{{$jobID}}"> View more to apply </a></div><br><br>
 Thanks <br><br>

  Myskillhub <br>
  07065907948 <br>
  itaforfrancis@gmail.com<br>
</p>
</body>
</html>