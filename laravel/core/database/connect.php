<?php

	class connection{

		public static function make($config)
		{
			try{

				// $serverName="localhost";
				// $userName="root";
				// $password="";
				// $dbName="laravel";

				// return new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);
				 
				 return new PDO($config['connection'].';dbname='.$config['database'],
				 	$config['name'],
				 	$config['password'],
				 	$config['option']
				 	);



			}
			catch(PDOException $e){

				die('Could Not Connect' . $e->getMessage());
			}


		}


	}


?>