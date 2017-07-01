<?php

$config=require 'config.php';
require 'database/connect.php';
require 'database/queryBuilder.php';

	$pdo=connection::make($config['database']);

	$description=new fetchAllData($pdo);



?>