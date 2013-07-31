function checkStr(str){
	re = /[^a-zA-Z0-9]/;
	return re.test(str);
}

function hide(str){
	$(".whiteCover").hide();
}

function showAlert(headstr,bodystr){
	$(".modalHeader").html("<h3>"+headstr+"</h3>");
	$(".modalBody").html("<p>"+bodystr+"</p>");
	$(".whiteCover").show();
}
