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
				<li class="nav-item"> <a class="nav-link" href="contactus.html">Contact Us</a></li>
				<li class="nav-item"> <a class="nav-link" href="socialmedia.html">Follow Us</a></li>
			</ul>	
		</div>
		<div id="content">
			<h2>Search for textbooks</h2>
		
		<main>
        <!--  <h1 class="text-center text-capitalize">Enter your search parameters</h1>      The original idea was to have textboxes to filter textbook entries. it didnt pan out
       <form id="form1" name="form1" method="post">
            <label for="subject">Subject Area:</label>
            <input type="subject" name="subject" id="subject">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title">			
            <label for="price">Price:</label>
            <input type="price" name="price" id="price">
            <input name="submit" type="submit" class="alert-success" id="submit" formaction="search.php" value="Submit"> &nbsp;
        </form>  -->
		
		
		<!--- begin PHP --->
		<?php 

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "individual";
		//$subject = $_POST['subject'];    this is unused code that was intended to give the user the option to filter the entries, it didnt work properly
		//$title = $_POST['title'];
		//$price = $_POST['price'];
		//if ($price == NULL)$price = "`%`";
		//if ($subject == NULL)$price = "`%`";
		//if ($title ==NULL)$price = "`%`";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error) . "<br>";
		} 
		$sql = "SELECT * FROM entries1";
		$result = $conn->query($sql);
		
		echo "<table border='1'>
		<tr>
		<th>Ticket Number</th>
		<th>Subject</th>
		<th>Title</th>
		<th>Price</th>
		<th>Email</th>
		<th>Description</th>
		</tr>";
		if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
			//echo "Ticket #: " . $row["TICKETNUM"]. " <br> Subject: " . $row["SUBJECT"]." <br> TITLE: " . $row["TITLE"]." <br> Price:  $". $row["PRICE"]." <br> Email: " . $row["EMAIL"]. " <br> Description: " . $row["DESCRIPTION"]. "<br>";
			echo "<tr>";
			echo "<td>" . $row['TICKETNUM'] . "</td>";
			echo "<td>" . $row['SUBJECT'] . "</td>";
			echo "<td>" . $row['TITLE'] . "</td>";
			echo "<td>   $" . $row['PRICE'] . "</td>";
			echo "<td>" . $row['EMAIL'] . "</td>";
			echo "<td>" . $row['DESCRIPTION'] . "</td>";
			echo "</tr>";
          }
		} else {
          echo "There are no current entries that match your criteria. Please check back later, or edit your search " . "<br>";
		  //<td><input type=\"radio\" name=\"RadioGroup1\" value=" . $x ." id=\"RadioGroup1_" . $x . "\"></td> <td>Ticket #: " . $row["Ticket"]. "</td> <td>- Description: " . $row["Description"]. "</td> <td>Email: " . $row["Email"]. "</td>";
		}
		$conn->close();
		//echo "Ticket #: " . $row["TICKETNUM"]. " |XXXX| Subject: " . $row["SUBJECT"]." |-----| TITLE: " . $row["TITLE"]." |-----| Price:  $". $row["PRICE"]." |----| Email: " . $row["EMAIL"]. "|----| Description: " . $row[DESCRIPTION]. "<br>";
		?>	
		
		
		<!--- end PHP --->
        <div></div>
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