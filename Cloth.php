<?php 
require_once "Product.php";
Class Cloth extends Product{
	protected $_brand;

	public function __construct ($b,$c,$d,$a) {
		parent::__construct($b,$c,$d);
		$this->_brand=$a;
	}
	public function try(){
		return $this->_brand;
	}
}

 ?>