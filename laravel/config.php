<?php

	return [

	'database'=> [

	'connection'=> 'mysql:host=localhost',
	'name' => 'root',
	'password' => '',
	'database' => 'laravel',
	'option' =>[
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
	]
		]

	];


?>