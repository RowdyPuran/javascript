<?php

class connection {

	public static function make()
	{
		$serverName="localhost";
		$userName="root";
		$password="";
		$dbName="laravel";

		try
		{
		return new PDO("mysql:host=$serverName;dbname=$dbName", $userName,$password);
	    }
	    catch(PDOException $e)
	    {
	    	die($e->getMessage());
	    }
	}



}

 




?>