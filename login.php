<?php 
	if(!isset($_SESSION)){
	    session_start();
	}
	session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>MapGoGIS Cloud Server</title>
		<link rel="stylesheet" href="css/login.css" type="text/css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cookie.js"></script>
		<script type="text/javascript" src="js/jquery.flot.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/jquery.uniform.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
	</head>
	
	<body>
		<div id="loginWrap">
			<div class="loginHeader">
				<h1 class="logo">MapGoGIS Cloud Server</h1>
			</div>
			<div class="loginContent">
				<form>
					<label>User ID</label>
					<input type="text" placeholder="User ID"/>
					<label>Password</label>
					<input type="password" placeholder="Password" />
					<input type="button" value="Sign In" class="btn01"/>
				</form>
				<a href="register.php" title="First time Log In" target="_self" class="goRegister"/>First time Log In</a>
				<a href="rPassword.php" title="Forget your password" target="_self" class="goRegister"/>Forget your password</a>
				<div id="errorDiv" class="errorBlk msg" style="display: none;">Please confirm your User ID and Email.</div>
			</div><!-- /loginContent -->
		</div><!-- /loginWrap -->
	</body>
</html>

