<?php
	include "../DB.php";
	$db = new DB();
	$sql = "select * from user where account = '".$_POST['u']."' and pwd = '".md5($_POST['p'])."'";
	$result = mysql_query($sql);
	if($row = mysql_fetch_array($result)){
		if(!isset($_SESSION)){
		    session_start();
		}
		$_SESSION['umail'] = $row['mail'];
		$_SESSION['account'] = $row['account'];
		$_SESSION['id'] = $row['id'];
		echo $row['id'];
	}else{
		echo "";
	}
	mysql_close();
?>