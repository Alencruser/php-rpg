<?php 
require_once "User.php";
require_once "Product.php";
Class Client extends User {
	protected $_billAmount;
	protected $_cart;

	public function __construct($a,$b){
		parent::__construct($a,$b,date("Y-m-d"));
		$this->_billAmount=0;
		$this->_cart=[];
	}
	public function buy($Product){
			$this->addProductToCart($Product->namep());
			$this->_billAmount+=$Product->pricep();
	}
	public function amount(){
		return $this->_billAmount;
	}
	public function carts(){
		return $this->_cart;
	}
	public function addProductToCart($product){
		array_push($this->_cart,$product);
	}
}

 ?>