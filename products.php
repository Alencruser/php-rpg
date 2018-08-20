<?php 
require "Vegetable.php";
require "Cloth.php";

$legume1 = new Vegetable(1,"Carotte",2,"Denis","2018-07-19");
$legume2 = new Vegetable(2,"Aubergine",5,"Arthur","2018-09-22");
$cloth1 = new Cloth(3,"Bonnet",15,"Reebok");
$cloth2 = new Cloth(4,"Pantalon",50,"G-Star");
$cloth3 = new Cloth(5,"Manteau",80,"Chanel");
return [
$legume1,
$legume2,
$cloth1,
$cloth2,
$cloth3
]

?>