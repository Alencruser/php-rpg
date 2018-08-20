<?php 
Class Product {
 protected $_id;
 protected $_name;
 protected $_price;

 public function __construct ($a,$b,$c){
 	$this->_id=$a;
 	$this->_name=$b;
 	$this->_price=$c;
 }
 public function idp(){
 	return $this->_id;
 }
 public function namep(){
 	return $this->_name;
 }
 public function pricep(){
 	return $this->_price;
 }
}
?>
