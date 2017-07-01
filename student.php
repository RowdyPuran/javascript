<?php
session_start();
//connect to database

$db=mysqli_connect("localhost","root","","db_jana");

if(isset($_POST['submit_btn']))
{ 

	$name= mysql_real_escape_string($_POST['name']);
	$address=mysql_real_escape_string($_POST['address']);
	$phone_no=mysql_real_escape_string($_POST['phone_no']);
	$class= mysql_real_escape_string($_POST['class']);
	$section=mysql_real_escape_string($_POST['section']);
	
	$q=mysqli_query($db, "INSERT INTO tbl_students(name, address, phone_no, class, section) 
		VALUES ('$name', '$address', '$phone_no','$class', '$section')");
	if(!$q){
		echo mysql_error();
	}
	else {
		header("location:update.php");	
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
		
		<div id="content">
			<div id="pageheading" align="center">
				<h1>Enter New Student Data</h1>
			</div>
			<form method="POST">
				<table align="center">
					<tr>
						<td>Name:</td> 
						<td><input type='text' name="name" required></br></td>
					</tr>
					<tr>
						<td>Address:</td> 
						<td><input type='text' name="address" required></td></br>
					</tr>
					<tr>
						<td>Phone Number: </td> 
						<td><input type='text' name="phone_no" required></td></br>
					</tr>
					<tr>
						<td>Class: </td>
						<td><input type='text' name="class" required></td></br>
					</tr>
					<tr>
						<td>Section:</td>
						<td>A<input type='radio' value="A" name="section" required>
							B<input type='radio' value="B" name="section" required></td></br>
						</tr>
						<tr>
							<td><input type='submit' value="Submit" name ="submit_btn"></td>
						</tr>
					</table>
				</form>

			</div>
		</div>
		<div id="footer"></div>	
	</div>
</body>
</html>
