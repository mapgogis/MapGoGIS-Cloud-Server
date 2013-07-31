$(".btn01").live("click",checkUser);
function checkUser(){
	var u = $("input[type='text']").attr('value');
	var p = $("input[type='password']").attr('value');
	if(u == "" || p == ""){
		document.getElementById("errorDiv").innerHTML = "User ID and Password is not null !!";
		document.getElementById("errorDiv").style.display = "block";
	}else if(checkStr(u) || checkStr(p)){
		document.getElementById("errorDiv").innerHTML = "Can only enter numbers and letters of the alphabet!!";
		document.getElementById("errorDiv").style.display = "block";
	}else{
		jQuery(function($) { 
	    	$(document).ready(function(){
	        	$.ajax({
			        url: "ajax/login.php",
			        type: 'POST',
			        data: {u:u,p:p},
			        dataType: "text",
			        success: function(response){
			        	if(response != ""){
			        		window.location = 'list.php';
			        	}else{
			        		document.getElementById("errorDiv").innerHTML = "User ID and Password is error !!";
			        		document.getElementById("errorDiv").style.display = "block";
			        	}
			        },
			        timeout: 3000
				});
			});
	    });
	}
}


