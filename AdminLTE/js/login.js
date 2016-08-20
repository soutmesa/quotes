$(function(){
	
	$('body').on('click', '#login', function(event){
		event.preventDefault();
		$('#errors').text('');
		var email = $('input[type="email"][name="email"]').val();
		var password = $('input[type="password"][name="password"]').val();
		var url = 'http://localhost/quotes/adminLTE/functions/functions.php?act=get&e='+email+'&p='+password;
		$.ajax({
			url: url,
			success: function(response){
				if (response ==='ok'){
					window.location = "http://localhost/quotes/adminLTE/index2.html";
				}
				else{
					$('#errors').text(response);
				}
			}
		});
	});
});