<?php 
class User {
	private $id = "";
	private $email = "";
	private $createdAt;

	function __construct($id, $email)
	{
		$this->id = $id;
		$this->email = $email;
		$this->createdAt = time();
	}
	public function getId(){
		return $this->id;
	}
	public function setId($id) {
        $this->id = $id;
    }

	public function getEmail(){
		return $this->email;
	}
	public function	setEmail($email){
		$this->email = $email;
	}
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

}
?>