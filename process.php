<?php 
$username="";
$email="";
$error=array();


include('database.php');





if (isset($_POST['submit'])) {

	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	$email=$_POST['email'];

	if (empty($username)) {
		array_push($error, "Username is required");
	}
	if (empty($email)) {
		array_push($error, "email is required");
	}
	if (empty($password)) {
		array_push($error, "password is required");
	}
	if ($password!=$cpassword) {
		array_push($error, "Password does not match");
	}
	if (count($error==0)) {
		$password1=md5($password);
		$sql="INSERT INTO registration (username,password,email)
					VALUES('$username','$password1','$email')";
					mysqli_query($conn, $sql);
	}

}

 ?>