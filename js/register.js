$(".btn01").live("click",register);
function showErrorMesg($mesg){
	document.getElementById("errorDiv").innerHTML = $mesg;
	document.getElementById("errorDiv").style.display = "block";
}

function errorStyle($id){
	document.getElementById($id+"Lab").className = "error";
	document.getElementById($id).className = "error";
}

function cleanStyle(){
	document.getElementById("errorDiv").style.display = "none";
	document.getElementById("useridLab").className = "";
	document.getElementById("userid").className = "";
	document.getElementById("mailLab").className = "";
	document.getElementById("mail").className = "";
}

function checkEmail(str){
	re = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	return re.test(str);
}

function register(user,userid,id){
	var userid = $("#userid").attr('value');
	var mail = $("#mail").attr('value');
	cleanStyle();
	
	var flag = false;
	if(userid == "" || mail == ""){
		errorStyle("userid");
		errorStyle("mail");
		showErrorMesg("All can not be empty !!");
	}else if(!checkEmail(mail)){
		errorStyle("mail");
		showErrorMesg("email format is error !!");
	}else{
		jQuery(function($) { 
			$(document).ready(function(){
		    	$.ajax({
			        url: "ajax/register.php",
			        type: 'POST',
			        data: {account:userid,mail:mail},
			        dataType: "text",
			        success: function(response){
			        	if(response != ""){
			        		showAlert("Successfully","Please check the email we just sent you.");
			        	}else{
			        		showAlert("Error",response);
			        	}
			        },
			        timeout: 30000
				});
			});
		});
	}
}