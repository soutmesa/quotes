$(document).ready(function(){
	$.ajax({
		url: "http://localhost/quotes/adminLTE/functions/crude_users.php?act=getall",
		success: function(response){
			var datas = response;
			console.log(datas);
		}
	});
});