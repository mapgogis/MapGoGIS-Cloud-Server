$(".btn01").live("click",seadMail);
function seadMail(user,userid,id){
	var userid = $("#userid").attr('value');
	var mail = $("#mail").attr('value');
	if(userid == "" || mail == ""){
		showAlert("Error","User ID and mail is not null !!");
	}else{
		jQuery(function($) { 
			$(document).ready(function(){
		    	$.ajax({
			        url: "ajax/pwdMail.php",
			        type: 'POST',
			        data: {mail:mail},
			        dataType: "text",
			        success: function(response){
			        	if(response != ""){
			        		showAlert("Successfully","The Email sent successfully !!");
			        	}else{
			        		showAlert("Error","Email and User id is error !!");
			        	}
			        },
			        timeout: 30000
				});
			});
		});
	}
}