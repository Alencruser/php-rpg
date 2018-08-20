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
		if(date_diff($this->_expiresAt,date("Y-m-d"))>1){
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