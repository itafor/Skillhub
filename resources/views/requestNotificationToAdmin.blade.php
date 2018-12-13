<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
	
<p>
The employer, {{ $name }} , <br>
Just requested for job seekers<br>
Login to approve the request<br>

Employer name: {{$name}} <br>
Employer Email: {{$userEmail}} <br>
Employer Phone: {{$userPhone}} <br>

 Thanks <br><br>

  Myskillhub <br>
  07065907948 <br>
  itaforfrancis@gmail.com<br>
</p>
<div><a href="http://localhost:8000/viewSpecificEmpReq/{{$requestID}}">See your request status </a></div>
</body>
</html>