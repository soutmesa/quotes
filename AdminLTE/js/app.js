$('#mytable').ready(function(){
	$.ajax({
		url: "http://localhost/quotes/adminLTE/functions/crud_users.php?act=getall",
		dataType: "json",
		success: function(response){
			var id = response.userId;
			var name = response.userName;
			var sex = response.sex;
			var type = response.type;
			var phone = response.phone;
			var email = response.email;
			var created = response.created_at;
			var updated = response.updated_at;
			var table = '<tr>';
			table += '<th>' + id + '</th>';
			table += '<th>' + name + '</th>';
			table += '<th>' + sex + '</th>';
			table += '<th>' + type + '</th>';
			table += '<th>' + phone + '</th>';
			table += '<th>' + email + '</th>';
			table += '<th>' + created + '</th>';
			table += '<th>' + updated + '</th>';
			table += '<th><a href="#" data-toggle="modal" data-target="#exampleModal">Edit</a> | <a href="#" data-toggle="modal" data-target="#exampleModal">Delete</a></th>';
			table += '</tr>';
			$('#mytable > tbody:last-child').append(table);
		}
	});
});

// $(document).off('.datepicker.data-api');
$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
});