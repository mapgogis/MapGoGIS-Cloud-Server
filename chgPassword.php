<?php 
include "User.php";
$user = new User();
$account = $user->account;
$uid = $user->uid;
$umail = $user->umail;
$user->checkUser();
$mesg = "";
if($umail==""){
	$mesg = "<p class=\"confirmation\">Please verify your account from your <span>".$umail."</span></p>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title></title>
		<link rel="stylesheet" href="css/list.css" type="text/css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/jquery.flot.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jquery.uniform.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/chgPassword.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
	</head>

	<body>
		<div id="wrap">
			<div class="header">
				<h1 class="logo">MapGo Mobile Server Logo</h1>
				<h2 class="serverName">MapGo Mobile Server</h2>
				<p class="slogan">We provide you download projects. Each projects include pictures and KML.</p>
				<?php echo $mesg;?>
				<div class="userBar">
					<h3>User ID: <?php echo $account;?></h3>
				</div>
			</div><!-- /header -->
			
			<div class="container">
				<div class="tHeader">
					<h3>Change Password</h3>
				</div><!-- tHeader -->
				<table border="0" cellspacing="0" cellpadding="0" class="hTable"><tbody>
					<tr>
						<th>Current Password</th>
						<td><input type="password" id="oldpwd" placeholder="Current Password"/></td>
					</tr>
					
					<tr>
						<th>New Password</th>
						<td><input type="password" id="pwd" placeholder="New Password"/></td>
					</tr>
					
					<tr>
						<th>Confirm Password</th>
						<td><input type="password" id="repwd" placeholder="Confirm Password"/></td>
					</tr>
					</tbody>
				</table><!-- /htable -->
				<div class="tFooter">
					<div class="btns">
						<!-- <input type="button" class="btn" value="Cancel"/> -->
						<input type="button" class="btnPrimary" value="update"/>
					</div>
				</div><!-- tFooter -->
			</div><!-- /container -->
			
			<div class="footer">
				<a href="#" class="website">MapGoGIS.com</a>
				<p class="copyright">2013 MapGo GIS - All rights reserved</p>
				<div class="btns">	
					<a href="#" class="gitHub">Download Github</a>
					<a href="#" class="AppStore">AppStore</a>
					<a href="#" class="Twitter">Twitter</a>
				</div><!-- /btns -->
			</div><!-- /footer -->
		</div><!-- /container -->
		
		<div class="whiteCover" style="display: none">
			<div class="modal">
			    <div class="modalHeader">
			    	<h3></h3>
			    </div>
			    <div class="modalBody">
			    	<p></p>
			    </div>
			    <div class="modalFooter">
			    	<a href="#" class="btn" onclick="hide('whiteCover');">ok</a> 
				</div>
			</div><!-- /modal -->
		</div><!-- /whiteCover -->
	</body>
</html>