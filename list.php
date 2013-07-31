<?php 
include "User.php";
$user = new User();
$account = $user->account;
$uid = $user->uid;
$user->checkUser();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MapGoGIS Cloud Server</title>
    <link rel="stylesheet" href="css/list.css" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/jquery.flot.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.uniform.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/list.js"></script>
</head>

<body>
    <div id="wrap">
        <div class="header">
            <h1 class="logo">MapGoGIS Cloud Server Logo</h1>
            <h2 class="serverName">MapGoGIS Cloud Server</h2>
            <p class="slogan">We provide you download projects</p>
            <div class="userBar">
                <h3>User ID: <?php echo $account; ?></h3>
                <a href="chgPassword.php" target="_blank" title="Change Password">Change Password</a>
            </div><!-- /userBar -->
        </div>
		
        <div class="container">
        	<?php
			    include "DB.php";
				$db = new DB();
				$sql = "SELECT count(*)c,cremonth FROM projects WHERE userid = '".$account."' group by cremonth order by cremonth desc limit 0,5";
				$result = mysql_query($sql);

				while($row = mysql_fetch_array($result)){
					echo "<div class=\"tHeader\">".
                    		 "	<h3>".$row['cremonth']."</h3>".
                    		 "	<div class=\"sideBlk\">".
                        	 "		Total:<span>".$row['c']."</span>projects".
                    		 "	</div>".
                    		 "</div>".
                    		 "<div class=\"projectsList\">".
                    		 "<ul>";
					
					$sql2 = "select a.*, 
								 (select file from photos b where b.projectid=a.projectid order by a.credate desc limit 0,1)p
								 , (select count(*) from photos b where b.projectid=a.projectid)pc
								 from projects a where a.userid = '".$account."' and a.credate like '%".$row['cremonth']."%' order by a.id,a.credate desc ";

					$result2 = mysql_query($sql2) or die(mysql_error());;
					while($row2 = mysql_fetch_array($result2)){
						echo "<li>".
							 "<h4>".$row2['title']."</h4>".
							 "<span class=\"sum\">".$row2['pc']."</span> ".
							 "<img src=\""."files/".$account."/".$row2['projectid']."/".$row2['p']."\" alt=\"title\">".
							 "<div class=\"tools\">".
                             "<a href=\"#\" class=\"trashCan\" onclick=\"deleteProject('".$account."','".$row2['projectid']."','".$row2['id']."');\"><i class=\"icon-trash\"></i></a> ".
                             "<a href=\"zipDownload.php?user=".$account."&projectid=".$row2['projectid']."&userid=".$uid."\" class=\"download\" ><i class=\"icon-cloud-download\"></i></a>".
                        	 "</div>".
							 "</li>";
					}
					echo "</ul>"."</div>";
				}
				mysql_close();
		    ?>
        </div><!-- /container -->

        <div class="footer">
            <a href="http://www.mapgogis.com" class="website" target="_blank">MapGoGIS.com</a>

            <p class="copyright">2013 MapGoGIS - All rights reserved</p>

            <div class="btns">
                <a href="#" class="gitHub">Download Github</a> 
                <a href="https://itunes.apple.com/tw/app/mapgo-gis-data-collection/id654912231?mt=8" target="_blank" class="AppStore">AppStore</a>
                <a href="https://twitter.com/mapgogis" class="Twitter">Twitter</a>
            </div><!-- /btns-->
        </div><!-- /footer -->
    </div><!-- /wrap -->
</body>
</html>
