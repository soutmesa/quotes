<?php 

	include('../config/config.php');
	session_start();
	$action = isset($_REQUEST["act"]);
	if ($action == "get"){
		$email = $_REQUEST['e'];
		$password = md5($_REQUEST['p']);
		$sql = "SELECT * FROM tbUsers WHERE email='".$email."' AND password='".$password. "'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			echo 'ok';
			while($row = $result->fetch_assoc()){
				$_SESSION['userId'] = $row['userId'];
				$_SESSION['userName'] = $row['userName'];
				$_SESSION['type'] = $row['type'];
				$_SESSION['created_at'] = $row['created_at'];
			}
			$remember = isset($_REQUEST['rem']);
			if($remember == "remember"){
				$month = time() + (60 * 60 * 24 * 30);
				setcookie('rem', $_SESSION['userName'], $month);
			}
		}else{
			echo 'invalid user name and password!!';
		}
	}
	if (!isset($_SESSION["userName"])){
	    header("location:http://localhost/quotes/adminLTE/pages/examples/login.html");
	    die();
	}
?>