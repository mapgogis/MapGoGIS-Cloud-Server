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
	<script type="text/javascript" src="js/register.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
</head>

<body>
	<div id="loginWrap">
		<div class="loginHeader">
			<h1 class="logo">MapGoGIS Cloud Server</h1>
		</div>
		<div class="loginContent">
		
			<h2>Enter User ID and Email address</h2>
			
			<p>We need to confirm your email address.</p>
			
			<form>
				<label id="useridLab">User ID</label>
				<input id="userid" type="text" placeholder="User ID"/>
				
				<label id="mailLab">Email address</label>
				<input id="mail" type="text" placeholder="Email address" />
				
				<input type="button" value="Submit" class="btn01"/>
			</form>
			
			<div id="errorDiv" class="errorBlk msg" style="display: none;">Please confirm your User ID and Email.</div>
			
			<a href="login.php" title="Back to login page." target="_self" class="backLogin">Back to login page.</a>
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
			</div>
		</div><!-- /modal -->
	</div><!-- /whiteCover -->
</body>
</html>
