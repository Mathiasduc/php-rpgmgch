<?php 
class Product {
	private $_id = "";
	private $_name = "";
	private $_price = 0;

	function __construct($id, $name, $price)
	{
		$this->_id = $id;
		$this->_name = $name;
		$this->_price = $price;
	}
	public function get_id(){
		return $this->_id;
	}
	public function set_id($_id) {
        $this->_id = $_id;
    }

	public function get_name(){
		return $this->_name;
	}
	public function	set_name($_name){
		$this->_name = $_name;
	}

	public function get_price(){
		return $this->_price;
	}
	public function set_price($_price){
		$this->_price = $_price;
	}
}
?>