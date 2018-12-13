

<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
	
<h1 style="color: #fff;">Hi, {{ $name }}</h1>
<h4>Employer Name {{$empName}}</h4>
<h4>Employer Phone {{$empphone}}</h4>
<h4>Employer Email {{$empEmail}}</h4>
<p>
<h2>Emplyer description</h2>
{{$Empdescription}}</p>
<div><a href="http://localhost:8000/applicanttohire/{{$userID}}">See the applicant this employer want to hire</a></div>
</body>
</html>