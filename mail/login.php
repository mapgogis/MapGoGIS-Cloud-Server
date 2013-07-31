<?php
	include "../DB.php";
	$db = new DB();
	$sql = "select * from user where account = '".$_GET['account']."' and pwd = '".md5($_GET['pwd'])."'";

	$result = mysql_query($sql);
	if($row = mysql_fetch_array($result)){
		if(!isset($_SESSION)){
		    session_start();
		}
		$_SESSION['umail'] = $row['mail'];
		$_SESSION['account'] = $row['account'];
		$_SESSION['id'] = $row['id'];
		mysql_close();
		header('Location: http://'.$_SERVER['HTTP_HOST']."/chgPassword.php");
	}
?>