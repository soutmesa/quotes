<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'quotes_db');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
$conn  = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (mysqli_connect_errno()) {
	echo("Failed to connect, the error message is : ". mysqli_connect_error());
	exit();
}
$user_name = 'mesa';
$user_pwd = '123';
$user_pwd = md5($user_pwd);

// $sql = "INSERT INTO tbUsers(sex, date_of_birth, phone, email, password, type, userName) VALUES ('".$sex."','".$dob."','".$phone."','".$email."','".$user_pwd."','".$type."','".$user_name."')";
// if($conn->query($sql) === TRUE){
// 	echo "New record created successfully";
// }else{
// 	echo "Error: " . $sql . "<br>" . $conn->error;
// }

$sql = "SELECT * FROM tbUsers WHERE userName='".$user_name."' AND password='".$user_pwd."'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo $row['userId'].''.$row['userName'];
	}
}

$conn->close();