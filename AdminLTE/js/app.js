$('#mytable').ready(function(){
	$.ajax({
		url: "http://localhost/quotes/adminLTE/functions/crud_users.php?act=getall",
		dataType: "json",
		type: "GET",
		success: function(response){
			// console.log(response)
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
	var ary = $('form').serializeArray();
	var obj = {};
	for (var a = 0; a < ary.length; a++) obj[ary[a].name] = ary[a].value;
	// $('#exampleModal').dialog('close');
	// console.log(obj.userName);
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
			// $('#exampleModal').modal('hide');
		}
	});
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
