<?php


class fetchAllData
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo=$pdo;
	}

	public function fetch($table){ 

		$statement=$this->pdo->prepare("SELECT * FROM {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);

	}

}





?>