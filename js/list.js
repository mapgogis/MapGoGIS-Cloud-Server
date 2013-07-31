function deleteProject(user,projectid,id){
	if(confirm("Are you sure to delete it？？")){
		jQuery(function($) { 
			$(document).ready(function(){
		    	$.ajax({
			        url: "ajax/deleteProject.php",
			        type: 'POST',
			        data: {user:user,projectid:projectid,id:id},
			        dataType: "text",
			        success: function(response){
			        	window.location = 'list.php?user='+user+"&id="+id;
			        	
			        },
			        timeout: 3000
				});
			});
		});
	}else{
		return false;
	}
}
