$(function(){
	$('#signout').click(function(){
		$.ajax({
			url: "http://localhost/quotes/adminLTE/functions/crud_users.php?act=logout",
			success: function(response){
				if(response==="loggedout"){
					console.log(response);
					window.location = "location:http://localhost/quotes/adminLTE/pages/examples/login.html";
				}
			}
		});
	});
});