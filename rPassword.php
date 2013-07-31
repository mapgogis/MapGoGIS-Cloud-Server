<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>MapGo Mobile Server</title>
	<link rel="stylesheet" href="css/login.css" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/jquery.flot.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript" src="js/rPassword.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
</head>

<body>
	<div id="loginWrap">
		<div class="loginHeader">
			<h1 class="logo">MapGoGIS Cloud Server</h1>
		</div>
		<div class="loginContent">
			<h2>Forgot your password?</h2>
			<form>
				<input id="mail" type="text" placeholder="Email address" />
				<input type="button" value="Send me new password" class="btn01"/>
			</form>
		</div><!-- /loginContent -->
	</div><!-- /loginWrap -->
	
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
		    	<a href="login.php" title="Back to login page." target="_self" class="backLogin">Back to login page.</a>
			</div>
			
		</div><!-- /modal -->
		
	</div><!-- /whiteCover -->
	
</body>
</html>
