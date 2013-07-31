$(".btnPrimary").live("click",chgPwd);
function chgPwd(){
	var oldpwd = $("#oldpwd").attr('value');
	var pwd = $("#pwd").attr('value');
	var repwd = $("#repwd").attr('value');
	
	if(oldpwd == "" || pwd == "" || repwd == ""){
		showAlert("Error","All can not be empty !!");
	}else if(pwd != repwd){
		showAlert("Error","New password and Confirm Password do not match !!");
	}else{
		jQuery(function($) { 
			$(document).ready(function(){
		    	$.ajax({
			        url: "ajax/chgPassword.php",
			        type: 'POST',
			        data: {pwd:pwd,oldpwd:oldpwd},
			        dataType: "text",
			        success: function(response){
			        	if(response != ""){
			        		alert(response);
			        		window.close();
			        	}else{
			        		showAlert("Error","Current Password is error !!");
			        	}
			        },
			        timeout: 6000
				});
			});
		});
	}
}