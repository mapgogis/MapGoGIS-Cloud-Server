<?php
include("../DB.php");
class Mapbox {
	public function __construct($name = 'World') {
		// $this->name = $name;
	}
	
	public function updateData($title = '',$class = '',$express = '',$x = '',$y = '',$projectid = '',$userid = '',$state = '') {
		$db = new DB();
		$sql = "";
		if($state == "insert"){
			$sql = "insert into `projects`( ".
				   "   `title` ".
				   " , `class` ".
				   " , `express` ".
				   " , `x` ".
				   " , `y` ".
				   " , `credate` ".
				   " , `cremonth` ".
				   " , `projectid` ".
				   " , `userid` ".
				   " ) values ( ".
				   " '".$title."' ".
				   " ,'".$class."' ".
				   " ,'".$express."' ".
				   " ,".$x." ".
				   " ,".$y." ".
				   " ,'".date("Y-m-d H-i-s")."' ".
				   " ,'".date("Y-m")."' ".
				   " ,'".$projectid."' ".
				   " ,'".$userid."' ".
				   " )";
		    
		}else{
			$sql = "update `projects` set ".
			"`title`='".$title."', ".
			"`class`='".$class."', ".
			"`express`='".$express."' ".
			" where projectid = '".$projectid."' ".
			" and userid = '".$userid."' ";
		}
		
		if(!mysql_query($sql)){
	    	mysql_close();
			return "error:".$sql;
		}else{
			mysql_close();
			return "success&".$projectid;
		}
		
	}
	
	public function updatePhoto($projectid = '',$filename = '',$userid = '',$file = null) {
		$db = new DB();
		
		$q_sql = "select * from photos where projectid = '".$projectid."' and file = '".$filename."' ";
		$result = mysql_query($q_sql);
		$flag = true;

		if($row = mysql_fetch_array($result)){
			$flag = false;
		}
		
		if($flag){
			$sql = "insert into `photos`( ".
			   "   `credate` ".
			   " , `projectid` ".
			   " , `file` ".

			   " ) values ( ".
			   " '".date("Y-m-d H-i-s")."' ".
			   " ,'".$projectid."' ".
			   " ,'".$filename."' ".
			   " )";
		
			if(!is_dir("../files/".$userid)){
				mkdir("../files/".$userid);
			}
			
			if(!is_dir("../files/".$userid."/".$projectid)){
				mkdir("../files/".$userid."/".$projectid);
			}
			
			$str2 = base64_decode(strtr($file, '-_,', '+/='));
			$handle = fopen("../files/".$userid."/".$projectid."/".$filename, "w" );
			fwrite($handle,$str2);
			fclose($handle);
	
		    if(!mysql_query($sql)){
		    	mysql_close();
				return "error:".$sql;
			}else{
				mysql_close();
				return "success&".$projectid."&".$filename;
			}
		}else{
			return "success&".$projectid."&".$filename;
		}
	}
	
	public function getID(){
		$db = new DB();
		$flag = true;
		$newID = rand(1,99999999);
		$sql = "select account from user where account = '".$newID."' ";
		$result = mysql_query($sql);
		while($flag){
			$account = "";
			if($row = mysql_fetch_array($result)){
				$account = $row['account'];
			}
			if($account != $newID){
				$flag = false;
				$iSQL = "INSERT INTO `user`( ".
				"  `account` ".
				", `credate` ".
				") VALUES (".
				" '".$newID."' ".
				",'".date("Y-m-d H-i-s")."' ".
				") ";
				mysql_query($iSQL);
			}
		}
		
		mysql_close();
		return $newID;
	}
}
?>