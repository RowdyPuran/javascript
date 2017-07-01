<?php
require_once('library/login_class.php');
$login=new login();

?>
<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
	<link rel="stylesheet" href="css/layout.css" type="text/css">
	<link rel="stylesheet" href="css/menu.css" type="text/css">

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
				<div align="center"> <h1>Login to your account</h1> </div>

			</div>
			<form id="registerform" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<table align="center">
					<td>UserName: </td>
					<td><input type='text' name="Username"></td></br>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type='password' name="Password"></td></br>
				</tr>
				<tr>
					<td><input type='submit' value="Login" name ="login_btn"></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div id="footer"></div>	
</div>
</body>
</html>
<?php 
if(isset($_POST['login_btn']))
	{
		$userName=$_POST['Username'];
		$password=$_POST['Password'];

		$login->validation($userName,$password);

	}


?>