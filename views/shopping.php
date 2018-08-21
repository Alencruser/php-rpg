<?php 
$users=require_once __DIR__."/../data/users.php";
$products=require_once __DIR__."/../data/products.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="validateOrder.php">
		<select name="client">
			<?php foreach ($users as $v) {
				?><option value=<?php echo $v->id(); ?>><?php echo $v->id(); ?></option>
			<?php } ?>
		</select>
		<select name="premier">
			<?php foreach ($products as $v) {
				?><option value=<?php echo $v->namep(); ?>><?php echo $v->namep(); ?></option>
			<?php } ?>
		</select>
		<select name="deuxieme">
			<?php foreach ($products as $v) {
				?><option value=<?php echo $v->namep(); ?>><?php echo $v->namep(); ?></option>
			<?php } ?>
		</select>
		<select name="troisieme">
			<?php foreach ($products as $v) {
				?><option value=<?php echo $v->namep(); ?>><?php echo $v->namep(); ?></option>
			<?php } ?>
		</select>
		<button type="submit">Valider commande</button>
	</form>
</body>
</html>