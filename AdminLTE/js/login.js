$(function(){
	$('body').on('click', '#login', function(event){
		event.preventDefault();
		$('#errors').text('');
		var email = $('input[type="email"][name="email"]').val();
		var password = $('input[type="password"][name="password"]').val();
		var tmp_remeber = $('input[type="checkbox"]:checked').val();
		var remember = '';
		if (tmp_remeber != undefined){
			remember = tmp_remeber;
		}
		var url = 'http://localhost/quotes/adminLTE/functions/session_login.php?act';
		$('#errors').text('');
		$('#errors').removeClass('hasErrors');
		if (email.length <= 0){
			$('#errors').text('Please, enter your email!!');
			$('#errors').addClass('hasErrors');
		}else{
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if(!emailReg.test(email)){
				$('#errors').text('Please, enter a valid email!!');
				$('#errors').addClass('hasErrors');
			}else{
				if (password.length <= 0){
					$('#errors').text('Please, enter your password!!');
					$('#errors').addClass('hasErrors');
				}else{
					$.ajax({
						url: url + '=get&e='+email+'&p='+password + '&rem=' + remember,
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
		}
	});
});