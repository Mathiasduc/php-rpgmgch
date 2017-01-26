<?php 
	class Cloth extends Product{
		private $_brand = "";
		function __construct($id,$name,$price,$brand){
	 		parent::__construct($id,$name,$price);
	 		$this->_brand = $brand;
	 	}
	 	public function get_brand(){
	 		return $this->_brand;
	 	}
	 	public function try(){
	 		return "At least, i tried!";
	 	}
	}
 ?>