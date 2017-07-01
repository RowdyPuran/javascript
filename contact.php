<?php

	class house{
 
	public $name;

	public function __get($hello)
	{
		echo "$hello doesnot exist";
	}
	public function __set($name ,$value)
	{
		echo "$name=$value";
	}

}
$house=new house();
$house->lname;
$house->puran='sampurna';
?>
