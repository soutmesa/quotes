<?php 

	include('../config/config.php');
	session_start();
	$action = isset($_REQUEST["act"]);
	if ($action == "get"){
		$email = $_REQUEST['e'];
		$password = md5($_REQUEST['p']);
		$sql = "SELECT * FROM tbUsers WHERE email='".$email."' AND password='".$password."' AND type='admin'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			echo 'ok';
			while($row = $result->fetch_assoc()){
				$_SESSION['userId'] = $row['userId'];
				$_SESSION['userName'] = $row['userName'];
			}
		}else{
			echo 'invalid user name and password!!';
		}
	}
	if (!isset($_SESSION["userName"])) {
	    header("location:http://localhost/quotes/adminLTE/pages/examples/login.html");
	    die();
	  }
?>