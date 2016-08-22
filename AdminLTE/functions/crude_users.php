<?php
	include('../config/config.php');
	switch($_REQUEST['act']){
		case 'getall':
			$sql = "SELECT * FROM tbUsers ";
			$result = $conn->query($sql);
			$users = $result->fetch_assoc();
			echo json_encode($users);
			break;
		case 'getone':
			$id = $_GET['id'];
			$sql = "SELECT * FROM tbUsers WHERE userId=" + $id + "";
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				$users = $result->fetch_assoc();
				echo json_encode($users);
			}else{
				echo 'not found!!';
			}
			break;
		case 'post':
			# code...
			break;
		case 'put':
			# code...
			break;
		case 'del':
			# code...
			break;
		default:
			# code...
			break;
	}
?>