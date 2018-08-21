<?php 
$users=require_once __DIR__."/../data/users.php";
$products=require_once __DIR__."/../data/products.php";
foreach ($users as $v) {
	if ($_POST["client"]==$v->id()) {
		$client=$v;
	}
}
foreach ($products as $v) {
	if($_POST["premier"]==$v->namep()){
		$article1=$v;
	}
}
foreach($products as $v){
	if($_POST["deuxieme"]==$v->namep()){
		$article2=$v;
	}
}
foreach($products as $v){
	if($_POST["troisieme"]==$v->namep()){
		$article3=$v;
	}
}
$client->buy($article1);
$client->buy($article2);
$client->buy($article3);
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