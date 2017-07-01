<!DOCTYPE html>
<html>
<head>
	<title>Image upload</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
		<input type="file" name="image"><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="OOP";

	//creating connection 
	$conn=mysqli_connect($servername, $username, $password, $database);

	// checking connection
	if(!$conn) {
		die('connection failed:' . mysqli_connect_error());
	}
	 //if it is set then do this....
	if(isset($_POST['submit']))
	{
		      //file consist of four parameter 
			  $file_name = $_FILES['image']['name'];
		      $file_size =$_FILES['image']['size'];
		      $file_tmp =$_FILES['image']['tmp_name'];
		      $file_type=$_FILES['image']['type'];

		       //checking the file extension
			  if($file_type=="image/jpeg" or $file_type=="image/png" or $file_type=="image/gif")
			  {
			  	//checking the file size
			  	if($file_size<=90000)
			  	{
			  	//directory of uploaded image 
			  		move_uploaded_file($file_tmp,"images/$file_name");
			  	}
			  	else
			  	{
			  		echo "<script>alert('image is larger, only 90kb size is allowed')</script>";
			  		exit();
			  	}
			  }
			  else
			  {
			  	echo "<script>alert('Image type is invalid')</script>";
			  	exit();
			  }
			  $query="INSERT INTO image (image) VALUES ('$file_name')";
			  if(mysqli_query($conn,$query))
			  {
			  	echo "<script>alert('Successfully Uploaded Image to Database')</script>";
			  }
	}

?>