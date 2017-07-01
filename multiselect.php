<!DOCTYPE html>
<html>
<head>
	<title>multiselect</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="dist/css/bootstrap-multiselect.css" type="text/css"/>

</head>
<body>
<form action="" method="POST">
<select name="deductions[]" multiple="multiple">
<option value="ram">RAM</option>
<option value="hari">HARI</option>
<option value="gopi">GOPI</option>
<option value="krishna">KIRISNA</option>
<option value="balram">BALRAM</option>
</select>
<br>
<input type="submit" value="submit" name="submit">
</form>
<?php 
$db = mysqli_connect("localhost","root","","patient");
if(!$db)
{
    die("ERROR >>>>>>>");
}
$course=@$_POST['deductions'];
if($course)
{
    foreach($course as $c)
    {
        mysqli_query($db, "INSERT INTO test_form (test_id) VALUES (' ".mysqli_real_escape_string($db, $c)." ')");

    }
}

?>
</body>
</html>