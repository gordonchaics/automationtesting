
<!DOCTYPE html>
<html>
<head>
	<title>FYP Project</title>
	<link rel="stylesheet" type="text/css" href="navbarstyle.css">	
</head>
<body>
<center>
			<h3>Student Registration Page</h3><br><br>
	<div class="form">
	<form name="registration" action="sturegistration.php" method="post">
		Username: <br><input type="text" name="username" required="required"/><br>
		Default Password: <br><input type="password" name="password" required="required" id="myInput"/></br><input type="checkbox" onclick="myFunction()">Show Password</br></br>
		Confirm Password: <br><input type="password" name="cpass" required="required" id="myInput1"/></br><input type="checkbox" onclick="myFunction1()">Show Password</br></br>
		Email: <br><input type="email" name="email" required="required"/><br>
		Phone no: <br><input type="text" name="phoneno" required="required"/><br>
		
		<input type="submit" value="Register"/>  <input type="reset" value="Reset">
	</form>
	</div>
	</center>
</body>
</html>