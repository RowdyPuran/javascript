<?php
session_start();



//connect to database

$db=mysqli_connect("localhost","root","","db_jana");

if(isset($_POST['submit_btn']))
{ 

	$Fname= mysql_real_escape_string($_POST['Fname']);
	$Lname=mysql_real_escape_string($_POST['Lname']);
    $Password=mysql_real_escape_string($_POST['Password']);
    $password2= mysql_real_escape_string($_POST['password2']);
	$Username=mysql_real_escape_string($_POST['Username']);
    $Email=mysql_real_escape_string($_POST['Email']);

if($Password==$password2){
	$Password=md5($password2);
	$q=mysqli_query($db, "INSERT INTO user(Fname, Lname, Password, Username, Email) VALUES ('$Fname', '$Lname', '$Password','$Username', '$Email')");
$_SESSION['message'] = "you are now logged in!!!" ;
$_SESSION['Username'] = $Username ;
header("location: login.php");
}else{
	$_SESSION['message'] = "the two passwords don't match!!!" ;

}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
	<link rel="stylesheet" href="css/layout.css" type="text/css">
<link rel="stylesheet" href="css/menu.css" type="text/css">
 <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div id="holder">
<div id="header"></div>
<div id="navbar">
	<nav>
    <ul>
				<li>
					<a href="login.php">Login</a>
				</li>
				<li>
					<a href="register.php">Register</a>
				</li>
				
		</ul>

	</nav>
</div>	
	
<div id="content">
<div id="pageheading">
	<h1>Registration Form</h1>
<?php 
	if (isset($_SESSION['message'])){
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
	?>
</div>
<form id="registerform" method="POST" action="register.php">
<table align="center">
<tr>
<td>First Name:</td> 
<td><input type='text' name="Fname" required></br></td>
</tr>
<tr>
<td>Last Name:</td> 
<td><input type='text' name="Lname" required></td></br>
</tr>
<tr>
<td>Email: </td> 
<td><input type='email' name="Email" required></td></br>
</tr>
<tr>
<td>UserName: </td>
<td><input type='text' name="Username" required></td></br>
</tr>
<tr>
<td>Password:</td>
<td><input type='password' name="Password" required></td></br>
</tr>
<tr>
<td>Confirm Password:</td>
<td><input type='password' name="password2" required></td></br>
</tr>
<tr>
<td><input type='submit' value="Register" name ="submit_btn"></td>
</tr>
	</table>
</form>

</div>
</div>
<div id="footer"></div>	
</div>
</body>
</html>