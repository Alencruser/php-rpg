<?php 
$products=require "products.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Intitulé</th>
			<th>Prix</th>
			<th>Legume : Producteur <br>Vêtement : Marque</th>
			<th>Frais ?</th>
		</tr>
		<?php for($i=0;$i<5;$i++){
			?><tr>
				<td><?php echo $products[$i]->idp(); ?></td>
				<td><?php echo $products[$i]->namep(); ?></td>
				<td><?php echo $products[$i]->pricep(); ?></td>
				<td><?php if($i<2){
					echo $products[$i]->prod();
				}else {
					echo $products[$i]->try();
				}  ?></td>
				<td><?php if($i<2){
					if($products[$i]->isFresh()){
					echo "Frais"; 
				}else {
					echo "Pas frais";
				}
				}?></td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>