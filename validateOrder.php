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
return $client;
?>