<?php
	include('../config/config.php');
	switch($_REQUEST['act']){
		case 'getall':
			$sql = "SELECT * FROM tbUsers";
			$result = $conn->query($sql);
			// $users = $result->fetch_assoc();
			$users = array();
			while ($row = $result->fetch_assoc()){
				$users[] = $row;
			}
			echo json_encode($users);
			break;
		case 'getone':
			$id = $_GET['id'];
			$sql = "SELECT * FROM tbUsers WHERE userId=" + $id + "";
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				$users = $result->fetch_assoc();
				echo json_encode($users);
				print_r($users);
			}else{
				echo 'not found!!';
			}
			break;
		case 'post':
			$today = date("Y/m/d H:i:s");
			$sql = "INSERT INTO tbUsers (sex, date_of_birth, phone, email, address, password, token_password, type, created_at, updated_at,userName) VALUES ('".$_POST['sex']."','".$_POST['dob']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['address']."','".md5($_POST['password'])."','".md5($_POST['password'])."','".$_POST['type']."','".$today."','".$today."','".$_POST['userName']."')";
			if ($conn->query($sql) === TRUE){
				$last_id = $conn->insert_id;
				$sql = "SELECT * FROM tbUsers WHERE userId='".$last_id."'";
				$result = $conn->query($sql);
				$user = $result->fetch_assoc();
				echo json_encode($user);
			}else{
				echo "Error: " . $sql . "<br>" . $conn->error;			
			}
			break;
		case 'put':
			# code...
			break;
		case 'del':
			$user_id = $_GET['current_id'];
			$sql = "SELECT type FROM tbUsers WHERE userId='".$user_id."'";
			$result = $conn->query($sql);
			if ($result->num_rows > 0){
				$type = $result->fetch_object()->type;
				if($type=="admin"){
					$id = $_GET['id'];
					$sql = "DELETE FROM tbUsers WHERE userId='".$id."'";
					if($conn->query($sql) === TRUE){
						echo "deleted";
					}
				}else{
					echo "permission denied!!!";
				}
			}
			break;
		case 'logout':
			session_destroy();
			if(!isset($_SESSION['userName'])){
				header('location: http://localhost/quotes/adminLTE/pages/examples/login.html');
			}
			break;
		default:
			# code...
			break;
	}
?>