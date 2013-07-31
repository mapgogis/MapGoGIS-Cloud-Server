<?php
Class DB{
	public $dbIP = "localhost";
	public $dbPort = "";
	public $dbAccount = "";
	public $dbPwd = "";
	public $dbName = "mobileServer";
	public $con = null;
	public function __construct() {
		$this->con = mysql_connect($this->dbIP.":".$this->dbPort,$this->dbAccount,$this->dbPwd);
		mysql_query("set names 'UTF8'");
		mysql_select_db($this->dbName, $this->con);
	}
}
?>