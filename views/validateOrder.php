<?php 
require __DIR__."/views/validateOrder.php";
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>Recapitulatif commande</th>
		</tr>
		<tr>
			<td>Bonjour <?php echo $client->id(); ?></td>
		</tr>
		<tr>
			<td>Article 1 : <?php echo $article1->namep(); ?></td>
		</tr>
		<tr>
			<td>Article 2 : <?php echo $article2->namep(); ?></td>
		</tr>
		<tr>
			<td>Article 3 : <?php echo $article3->namep(); ?></td>
		</tr>
		<tr>
			<td>Prix total : <?php echo $client->amount(); ?></td>
		</tr>
	</table>
</body>
</html>