<?php


		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "lotus";


		$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
		if (!$conn) {
    		die("Connection failed: " . mysqli_connect_error());
		}


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$name = $_POST['name'];
		//$name = test_input($name);

		$email = $_POST['email'];
		//$email = test_input($email);

		$subject = $_POST['subject'];
		//$subject = test_input($subject);

		$message = $_POST['message'];
		//$message = test_input($message);

	}
		//$name = quote_smart($name, $db_handle);
		//$email = quote_smart($email, $db_handle);
		//$subject = quote_smart($subject, $db_handle);
		//$message = quote_smart($message, $db_handle);


		$sql = "INSERT INTO feedback (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

		if (mysqli_query($conn, $sql)) {
    		echo "Thanks for taking time. We appreciate your feedback!";
		}
		else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




?>