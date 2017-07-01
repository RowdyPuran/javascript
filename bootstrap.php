<?php

require('connection.php');

require('queryBuilder.php');

 

return new queryBuilder(
	connection::make()
	);

?>