		<?php 
		$email=$_POST['email'];
		$subject= $_POST['subject'];
		$title = $_POST['title'];
		$price= $_POST['price'];
		$description= $_POST['description'];
		// echo $email . " " . $telephone . " " . $description;

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error) . "<br>";
		} 
		//echo "Connected successfully" . "<br>";
		$description = $conn->real_escape_string($description);
		$sql = "INSERT into entries1 (`EMAIL`,`SUBJECT`,`TITLE`,`PRICE`,`DESCRIPTION`) values ('$email','$subject','$title','$price','$description')";
		$result = $conn->query($sql);
		/*if (!$result){	
		if ($conn->errno==1452){
		echo ("<p>We do not have that Email address on file. Make sure you typed it in correctly. You must register for an account first!</p>");
		}
		else
		echo ("<p>Error: Ticket information was not added.</p>" .
			"<p>Error code $conn->errno: $conn->error. </p>");
		$conn->close();
		exit;
		}
		else{
		echo ("<p><b>Your book has been submitted. Please check the sell tab!</b></p>");
		}  */

		$conn->close();
		echo "<script>alert('Thanks!');</script>";
		sleep (5);
		header ("Location: index.html");
		?>
		
	

		
		