<!-- Form Connection File to phpMyAdmin Database -->

<?php
	// Get Values from Form...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];


	//Database Connection...
	$conn = new mysqli('localhost', '_MJessil', 'WZu6LCtKnpfdpjT5', '3.4_3.8_iterationproject_MJessil');
	if($conn->connect_error){
		die('Error Connecting to Database: ' .$conn->connect_error);
	}else{
		$result = $conn->prepare("insert into contact(name, email, phone, message)
			values(?, ?, ?, ?)");
		$result->bind_param("ssss", $name, $email, $phone, $message);
		$result->execute();
		echo "Submission successful, thank you we will be in contact with you soon.";
		$result->close();
		$conn->close();
	}
?>