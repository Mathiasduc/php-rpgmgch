<?php 
class User {
	private $_id = "";
	private $_email = "";
	private $_createdAt;

	function __construct($id, $email)
	{
		$this->_id = $id;
		$this->_email = $email;
		$this->_createdAt = time();
	}
	public function get_id(){
		return $this->_id;
	}
	public function set_id($_id) {
        $this->_id = $_id;
    }

	public function get_email(){
		return $this->_email;
	}
	public function	set_email($_email){
		$this->_email = $_email;
	}
	public function get_createdAt()
	{
		return $this->_createdAt;
	}

}
?>