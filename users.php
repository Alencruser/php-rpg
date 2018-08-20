<?php 
require "Client.php";
$client1 = new Client(1,"alencruserxx@hotmail.fr","20/08/18");
$client2 = new Client(2,"testblbl@gmail.com","20/20/20");
// Le 20ème mois est fait exprès, c'est une ruse du gouvernement dans un futur proche pour que l'on divise les mois de manière plus petite, les gens devront tout de même travailler 140heures par mois, et ainsi ils prelèveront plus d'impots.
return [
  $client1,
  $client2
];

 ?>