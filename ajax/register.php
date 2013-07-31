<?php
	include("../DB.php");
	include("../PHPMailer/class.phpmailer.php");
	$db = new DB();
	$a=rand(0,41);
	$word = array("a","b","c","d","e","f","g","h","i","j","k","l","m",
				  "n","o","p","q","r","s","t","u","v","w","x","y","z",
				  "A","B","C","D","E","F","G","H","I","J","K","L","M",
				  "N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
	$newPwd = $word[rand(0,41)].rand(0,9).rand(0,9).$word[rand(0,41)].rand(0,9).
			  $word[rand(0,41)].rand(0,9).rand(0,9).$word[rand(0,41)].rand(0,9);
	$sql = "select * from user where account = '".$_POST['account']."'";
		
	$result = mysql_query($sql);
	if($row = mysql_fetch_array($result)){
		$uSQL = "update user set pwd='".md5($newPwd)."',mail = '".$_POST['mail']."' ".
		    	"where id = '".$row['id']."' and account = '".$row['account']."' ";

		mysql_query($uSQL);
		$mail= new PHPMailer();
		$mail->IsSMTP();     
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->CharSet = "utf8";
		      
		$mail->Username = "mapgogis";
		$mail->Password = "U62next9a";
		      
		$mail->From = "mapgogis@gamil.com";
		$mail->FromName = "MapGoGIS Cloud Server";
		      
		$mail->Subject = "MapGoGIS Cloud Server: Your new Password";
		
		$mail->Body = "Your new Password<br>".
					  "Password: <p>".$newPwd."</p><br>".
					  "To use the new password you need to activate it. <br>".
					  "Please click on the link below (or copy and paste the URL into your browser):<br>".
					  "<a href='http://cloud.mapgogis.com'>http://cloud.mapgogis.com</a><br><br>".
					  "For security reason, you are suggested to".
					  "<a href='http://cloud.mapgogis.com/mail/login.php?account=". $row['account']."&pwd=".$newPwd."'>change password</a> accordingly.<br><br><br>".
					  "Regards!<br>".
					  "MapGo GIS Team";
		
		$mail->IsHTML(true);
		$mail->AddAddress($_POST['mail'], $row['account']);
		if(!$mail->Send()){
		    echo "Mailer Error: " . $mail->ErrorInfo;
		    exit();
		}
		echo "true";
	}else{
		echo "";
	}
	mysql_close();
?>