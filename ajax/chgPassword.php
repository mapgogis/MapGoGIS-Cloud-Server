<?php
	include("../DB.php");
	session_start();
	$account = $_SESSION['account'];
	$uid = $_SESSION['id'];
	$db = new DB();
	$sql1 = "select * from user where pwd='".md5($_POST['oldpwd'])."' and id = '".$uid."' and account = '".$account."' ";
	$result = mysql_query($sql1);
	if($row = mysql_fetch_array($result)){
		$sql2 = "update user set pwd='".md5($_POST['pwd'])."' ".
		   "where id = '".$uid."' and account = '".$account."' ";
		$result2 = mysql_query($sql2);
		echo "Password update successfully !!";
	}else{
		echo "";
	}
	
	mysql_close();
?>