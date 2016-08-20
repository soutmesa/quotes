<?php 

	include('../config/config.php');
	$action = isset($_REQUEST["act"]);
	if ($action == "get"){
		$email = $_REQUEST['e'];
		$password = md5($_REQUEST['p']);
		$sql = "SELECT * FROM tbUsers WHERE email='".$email."' AND password='".$password."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			echo 'ok';
			while($row = $result->fetch_assoc()){
				session_start();
				$_SESSION['userId'] = $row['userId'];
			}
		}else{
			echo 'invalid user name and password!!';
		}
	}

	function insert_user(){
		$data = json_decode(file_get_contents("php://input"));
		$sql = "INSERT INTO tbUsers(sex, date_of_birth, phone, email, password, type, userName) VALUES ('".$sex."','".$dob."','".$phone."','".$email."','".$user_pwd."','".$type."','".$user_name."')";
		if($conn->query($sql) === TRUE){
			echo "New record created successfully";
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>