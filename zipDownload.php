<?php
	include "DB.php";
	$db = new DB();
	$sql = "select * from photos where projectid = '".$_GET['projectid']."' ";
	$result = mysql_query($sql);
	$zip = new ZipArchive();
	$fileDir = "files/".$_GET['user']."/".$_GET['projectid']."/";
	$zipName = "files/zip/".$_GET['user']."_".$_GET['projectid']."_photos.zip";
	$zip->open($zipName, ZIPARCHIVE::CREATE);
	while($row = mysql_fetch_array($result)){
		$zip->addFile($fileDir.$row['file'], $row['file']);
	}
	mysql_close();
	$zip->close();
	
	header('Pragma: public');
	header('Expires: 0');
	header('Last-Modified: ' . gmdate('D, d M Y H:i ') . ' GMT');
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Cache-Control: private', false);
	header('Content-Type: application/octet-stream');
	header('Content-Length: ' . filesize($zipName));
	header('Content-Disposition: attachment; filename="'.$_GET['user']."_".$_GET['projectid']."_photos.zip" . '";');
	header('Content-Transfer-Encoding: binary');
	readfile($zipName);
?>