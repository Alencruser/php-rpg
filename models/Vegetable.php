<?php 
require_once "Product.php";
Class Vegetable extends Product {
	protected $_productorName;
	protected $_expiresAt;
	public function __construct ($c,$d,$e,$a,$b) {
		parent::__construct($c,$d,$e);
		$this->_productorName=$a;
		$this->_expiresAt=$b;
	}
	public function isFresh(){
		if(strtotime($this->_expiresAt)-strtotime(date("Y-m-d"))>=0){
			return true;
		}else {
			return false;
		}
	}
	public function prod(){
		return $this->_productorName;
	}
}
?>