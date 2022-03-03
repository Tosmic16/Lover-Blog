<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>Login</h1>
</div>
<div class="body">
	<form method="POST" action="process.php">
		<label class="lbl">Email</label><br>
		<input type="text" name="email" class="inp"><br>

		<label class="lbl">Password</label><br>
		<input type="password" name="password" class="inp"><br>
	</form>
	<br>
	<br>
	<p>Not A Member ?              <a href="registration.php">Join</a></p>
</div>
</body>
</html>