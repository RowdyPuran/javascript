<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>
<header>
	
	<ul>
			<li><a href="contact.php">Contact Us </a></li>
			<li><a href="about.php">About us </a></li>
	</ul>

</header>

<ul>
<?php foreach($task as $val): ?>
	<li>

		<?php if($val->married): ?>
			<strike> <?= $val->name; ?> </strike>

		<?php else: ?>
			<?= $val->name; ?>

		<?php endif; ?>

	</li>

		<?php endforeach; ?>
		



	</ul>



 



</body>
</html>