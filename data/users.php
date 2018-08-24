<?php 
require __DIR__."/../models/Client.php";
$client1 = new Client("Valentin","alencruserxx@hotmail.fr");
$client2 = new Client("Denis","testblbl@gmail.com");
return [
  $client1,
  $client2
];
 ?>