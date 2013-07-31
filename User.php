<?php
Class User{
	public $account = "";
	public $uid = "";
	public $umail = "";
	public function __construct() {
		if(!isset($_SESSION)){
		    session_start();
		}
		$this->account = $_SESSION['account'];
		$this->uid = $_SESSION['id'];
		$this->umail = $_SESSION['umail'];
	}
	
	public function checkUser(){
		if($this->account=="" && $this->uid == "" && $this->umail == ""){
			header("Location: http://".$_SERVER['HTTP_HOST']."");
		}
	}
}
?>