<?php
error_reporting (E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>Welcome to Hit The Books!</title>
	
	<meta name="author" content="William Chludzinski" />
	<meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="style.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink">Hit The Books</a></h1>
		</div>
		<div id="nav">
			<ul>
				<li class="nav-item"> <a class="nav-link" href="index.html">Home</a></li>
				<li class="nav-item"> <a class="nav-link" href="Searchtest.php">Search for texts</a></li>
				<li class="nav-item"> <a class="nav-link" href="sell.html">Sell your books</a></li>
				<li class="nav-item"> <a class="nav-link" href="aboutus.html">About Us</a></li>
				<li class="nav-item"> <a class="nav-link" href="sell.php">Sell your books</a></li>
				<li class="nav-item"> <a class="nav-link" href="contactus.php">Contact Us</a></li>
				<li class="nav-item"> <a class="nav-link" href="socialmedia.html">Follow Us</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>Got a question, problem, or concern?</h2>
			<p>
				Fill our your email address and we will get back to you ASAP.	
			</p>
		<main>
        <h1 class="text-center text-capitalize">Enter your information</h1>
        <form id="form1" name="form1" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="description">Description:</label>
            <input type="description" name="description" id="description">
            <input name="submit" type="submit" class="alert-success" id="submit" formaction="contactus.php" value="Submit"> &nbsp;
        </form>
        <div> 

		<?php 
		$email=$_POST['email'];
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

		$sql = "INSERT into contacts (`EMAIL`,`DESCRIPTION`) values ('$email','$description')";
		$result = $conn->query($sql);
		if (!$result){	
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
		echo ("<p><b>We value your feedback!</b></p>");
		}

		$conn->close();
		?>
		
		
		<!-- end php --->
		</div>
    	</main>

		
		</div>
		<div id="footer">
			<p>
				Copyright Hit The Books LLC. all rights reserved.
			</p>
		</div>
	</div>
</body>
</html>