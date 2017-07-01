<?php

 class queryBuilder
 {

 	protected $pdo;


	 public function __construct($pdo)
	 {
	 	$this->pdo=$pdo;
	 } 	
 	 public function selectDb($table)
 	 {
 	     $statement=$this->pdo->prepare("SELECT * FROM {$table}");

 	     $statement->execute();

 	     return $statement->fetchAll(PDO::FETCH_CLASS);

 	  }
 	  

 }


?>