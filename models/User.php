<?php 
Class User {
	private $_id;
	private $_email;
	private $_createdAt;
	public function __construct($a,$b,$c){
		$this->_id=$a;
		$this->_email=$b;
		$this->_createdAt=$c;
	}
	public function id(){
		return $this->_id;
	}
	public function email(){
		return $this->_email;
	}
	public function date(){
		return $this->_createdAt;
	}
}

 ?>