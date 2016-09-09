$('#mytable').ready(function(){
	$.ajax({
		url: "http://localhost/quotes/adminLTE/functions/crud_users.php?act=getall",
		dataType: "json",
		type: "GET",
		beforeSend: function(){
			// $('#mytable > tbody:last-child').html('<img src="http://loadinggif.com/images/image-selection/32.gif" class="imgLoad"/>');
			$('body').addClass('pace-running');
		},
		success: function(response){
			$('body').removeClass('pace-running');
			for (var i = 0; i< response.length; i++){
				var id = response[i].userId;
				var name = response[i].userName;
				var sex = response[i].sex;
				var type = response[i].type;
				var phone = response[i].phone;
				var email = response[i].email;
				var created = response[i].created_at;
				var updated = response[i].updated_at;
				var table = '<tr class="'+id+'">';
				table += '<th>' + id + '</th>';
				table += '<th>' + name + '</th>';
				table += '<th>' + sex + '</th>';
				table += '<th>' + type + '</th>';
				table += '<th>' + phone + '</th>';
				table += '<th>' + email + '</th>';
				table += '<th>' + created + '</th>';
				table += '<th>' + updated + '</th>';
				table += '<th><i class="fa fa-pencil-square-o" aria-hidden="true" id="edit"></i></a> | <i class="fa fa-trash-o" aria-hidden="true" id="delete" value="' + id + '"></i></th>';
				table += '</tr>';
				$('#mytable > tbody:last-child').append(table);
			}
		}
	});
});

$('body').on('click','#btnSave', function(event){
	event.preventDefault();
	var name = $('input[name="userName"]').val();
	var email = $('input[name="email"]').val();
	var pass = $('input[name="con-password"]').val();
	var con_pass = $('input[name="password"]').val();
	$('input[name="userName"]').removeClass('error');
	$('input[name="email"]').removeClass('error');
	$('input[name="password"]').removeClass('error');
	$('input[name="con-password"]').removeClass('error');
	if(name.length <= 0){
		$('input[name="userName"]').addClass('error');
	}else{
		if(email.length <= 0){
			$('input[name="email"]').addClass('error');
		}else{
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if(!emailReg.test(email)){
				$('input[name="email"]').addClass('error');
			}else{
				if(pass.length <= 0){
					$('input[name="password"]').addClass('error');
				}else{
					if(con_pass.length <= 0){
						$('input[name="con-password"]').addClass('error');
					}else{
						if(con_pass != pass){
							$('input[name="con-password"]').addClass('error');
						}else{
							var ary = $('form').serializeArray();
							var obj = {};
							for (var a = 0; a < ary.length; a++) obj[ary[a].name] = ary[a].value;
							$.ajax({
								url: "http://localhost/quotes/adminLTE/functions/crud_users.php?act=post",
								data: obj,
								type: "post",
								dataType: "json",
								success: function(response){
									console.log(response);
									var id = response.userId;
									var name = response.userName;
									var sex = response.sex;
									var type = response.type;
									var phone = response.phone;
									var email = response.email;
									var created = response.created_at;
									var updated = response.updated_at;
									var table = '<tr class="'+id+'">';
									table += '<th>' + id + '</th>';
									table += '<th>' + name + '</th>';
									table += '<th>' + sex + '</th>';
									table += '<th>' + type + '</th>';
									table += '<th>' + phone + '</th>';
									table += '<th>' + email + '</th>';
									table += '<th>' + created + '</th>';
									table += '<th>' + updated + '</th>';
									table += '<th><i class="fa fa-pencil-square-o" aria-hidden="true" id="edit"></i> | <i class="fa fa-trash-o" aria-hidden="true" id="delete" value="' + id + '"></i></th>';
									table += '</tr>';
									$('#mytable > tbody:last-child').append(table);
								}
							});
						}
					}
				}
			}
		}
	}
});

$('body').on('click', '#delete', function(event){
	event.preventDefault();
	var id = $(this).attr('value');
	if(confirm('Are you sure')){
		$.ajax({
			url: "http://localhost/quotes/adminLTE/functions/crud_users.php?act=del&id="+ id,
			success: function(response){
				$('tr.'+id).remove();
			}
		});
	}
});

$(document).off('click', '.day').on('click', '.day', function(e){
	$('.datepicker-dropdown').css('display','none');
});
$(document).off('click', '.datepicker').on('click', '.datepicker', function(e){
	$('.datepicker-dropdown').css('display','block');
});





















