<?php 
use PHPUnit\Framework\TestCase;


class Shopping extends TestCase{
	public function testShopping(){
		$users=require_once "data/users.php";
		$produits=require_once "data/products.php";
		$this->assertCount(2,$users);
		$this->assertCount(5,$produits);
	}
}
Class UserTest extends TestCase {
	public function testnom(){
		require_once "models/Client.php";
		$client2 = new Client("Denis","testblbl@gmail.com");
		$denis= $client2->id();
		$this->assertInternalType("string",$denis);
	}
}
 ?>