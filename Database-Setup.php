<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    mysqli_report(MYSQLI_REPORT_OFF);
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    $sql = "CREATE DATABASE time_table";

	if($conn->query($sql) == TRUE){
		echo "<script>console.log('Database created successfully')</script>";
	}
	else{
		echo "<script>console.log('Error Creating Database:'.$conn->error.)</script>";
	}

	$sql = "USE time_table";

	if($conn->query($sql) == TRUE){
		echo "<script>console.log('Database changed successfully')</script>";
	}
	else{
		echo "<script>console.log('Error changing database: ' .$conn->error.)</script>";
	}

	$sql = "CREATE TABLE times (logID INT NOT NULL PRIMARY KEY AUTO_INCREMENT, company_name VARCHAR(50) NOT NULL, address VARCHAR(255) NOT NULL, date VARCHAR(10) NOT NULL, time VARCHAR(5) NOT NULL)";

	if($conn->query($sql) == TRUE){
		echo "<script>console.log('Table created successfully')</script>";
	}
	else{
		echo "<script>console.log('Error creating table: '.$conn->error.)</script>";
	}

    $conn->close(); 
?>