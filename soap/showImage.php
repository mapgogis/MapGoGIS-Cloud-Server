<?php
$con = mysql_connect("localhost:8888","root","root");
mysql_query("set names 'UTF8'");
mysql_select_db("mapbox", $con);
$sql = "select file from surveyphotos where id = '30'";
$result = mysql_query($sql) or die('MySQL query error');
$file = "";
while($row = mysql_fetch_array($result)){
	$file = $row['file'];
}

echo '<img src="data:image/jpeg;base64,' . base64_encode($file) . '" />';;
?>