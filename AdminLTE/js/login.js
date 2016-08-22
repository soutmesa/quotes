$(function(){
	$('body').on('click', '#login', function(event){
		event.preventDefault();
		$('#errors').text('');
		var email = $('input[type="email"][name="email"]').val();
		var password = $('input[type="password"][name="password"]').val();
		var url = 'http://localhost/quotes/adminLTE/functions/session_login.php?act';
		if (email == null){
			$('#errors').text('please, enter your email!!!');
		}else{
			if (password == null){
				$('#errors').text('please, enter your password!!!');
			}else{
				$.ajax({
					url: url + '=get&e='+email+'&p='+password,
					success: function(response){
						if (response ==='ok'){
							window.location = "http://localhost/quotes/adminLTE/index.php";
						}
						else{
							$('#errors').text(response);
						}
					}
				});
			}
		}
	});
});