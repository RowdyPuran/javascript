<?php

	class Task {

		protected $name;

		public $absent=false;

		public function __construct($name){

			 $this->name=$name;
		}

		public function complete(){
			 echo $this->absent=true;
		}
	}

	$obj1=new Task('Puran Gurung');
 	
 	$obj1->complete();







?>


 



















