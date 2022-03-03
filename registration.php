<?php  
include('process.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
<h1>Register</h1>
</div>
<div class="body">
	<form method="POST" action="registration.php">
	
		<?php include('error.php'); ?>

		<label class="lbl">Email</label><br>
		<input type="text" name="email" class="inp"><br>

		<label class="lbl">Username</label><br>
		<input type="text" name="username" class="inp"><br>		

		<label class="lbl">Password</label><br>
		<input type="password" name="password" class="inp"><br>

		<label class="lbl">Confirm Password</label><br>
		<input type="password" name="cpassword" class="inp"><br>
		<button class="btn">submit</button>
		<br>
		<br>
			<p>Already A Member ?              <a href="registration.php">Login</a></p>

	</form>
</div>
</body>
</html>