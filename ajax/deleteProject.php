<?php
	include "../DB.php";
	$db = new DB();
	$sql1 = "delete from projects where 1=1 and id = '".$_POST['id']."' and userid = '".$_POST['user']."' ";
	$sql2 = "delete from photos where 1=1 and projectid = '".$_POST['projectid']."' ";
	$result1 = mysql_query($sql1);
	$result2 = mysql_query($sql2);
	mysql_close();
	$photos = scandir("../files/".$_POST['userid'].$_POST['user']."/".$_POST['projectid']);
	for($i=0 ; $i<sizeof($photos) ; $i++){
		if(strripos($photos[$i],".") == 0 && strripos($photos[$i],"..") == 1){
			chmod("../files/".$_POST['user']."/".$_POST['projectid']."/".$photos[$i],0777);
			unlink("../files/".$_POST['user']."/".$_POST['projectid']."/".$photos[$i]);
		} 
	}
	rmdir("../files/".$_POST['userid'].$_POST['user']."/".$_POST['projectid']);
?>