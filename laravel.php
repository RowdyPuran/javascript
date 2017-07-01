<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>
	<ul>
			
		<?php foreach($name as $val): ?>
			<li> <?php if($val->married): ?>
			<strike><?= $val->name; ?> </strike>

		<?php else: ?>
			<?= $val->name; ?>

		<?php endif; ?>
		</li>
	<?php endforeach; ?>
	



	</ul>
</body>
</html>