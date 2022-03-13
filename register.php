<?php
	$Name = $_POST['Name'];
    $Number=$_POST['Number'];
	$Organization = $_POST['Organization'];
	$City = $_POST['City'];
	$Address = $_POST['Address'];
	$Description = $_POST['Description'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','donate');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into `ngo`(`Name`, `Number`, `Organization`, `City`, `Address`, `Description`) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sissss", $Name, $Number, $Organization, $City, $Address, $Description);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>