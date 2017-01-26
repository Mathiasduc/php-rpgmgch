<?php 
include 'Product.php';
class Vegetable extends Product{	
	private $_productorName = "";
	private $_expireAt = 0;
	function __construct($id,$name,$price,$productorName,$expireAt){
		parent::__construct($id,$name,$price);
		$this->_productorName = $productorName;
		$this->_expireAt = $expireAt;
	}
	public function get_productorName(){
		return $this->_productorName;
	}
	public function get_expireAt(){
		return $this->_expireAt;
	}
	public function isFresh(){
		return true;
	}
}
?>