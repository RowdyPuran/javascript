<?php

	class login{
			//creating the variables
			public $serverName="localhost";
			public $username="root";
			public $password="";
			public $dbName="OOP";

			public $link;
			//making construct to access the private 
			public function __construct()
			{
				$this->connection();
			}

			// making connection to the database
			private function connection()
			{
				$this->link=mysqli_connect($this->serverName,$this->username,$this->password,$this->dbName);
				if(!$this->link)
				{
					echo "Error Establishing Connection:" .mysqli_connect_error();
				}
				 
			} 
			//making function to get the value form the login php
			public function validation($userName,$password)
			{	
				if($userName=="")
				{
					echo "<script>alert('Please enter the Username')</script>";
					exit();
				}
				if($password=="")
				{
					echo "<script>alert('Please enter the password')</script>";
					exit();
				}
				$query="SELECT * FROM form WHERE user_name='$userName' AND user_pass='$password'";
				 $run=mysqli_query($this->link,$query);
				 
			}

}


?>