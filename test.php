<?php
	$username = 'root';
  $userpwd = 'P@ssw0rd';
  $dbname = 'widget_corp';
  $host = 'localhost';
  
  $connection = mysqli_connect($host, $username, $userpwd, $dbname);
  
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
  }

  $query  = "SELECT * ";
  $query .= "FROM subjects ";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Database query failed.");
  }

  while ($row = mysqli_fetch_row($result)) {
    echo json_encode($row);
  }

  mysqli_close();
  ?>