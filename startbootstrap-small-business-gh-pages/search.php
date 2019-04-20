<!--- begin PHP --->
		<?php 

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ez consulting";
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
		//echo "Connected successfully" . "<br>";
		$sql = "SELECT * FROM entries1";
		//$sql = "SELECT * FROM entries1 WHERE `PRICE` LIKE $price && `TITLE` LIKE $title && `SUBJECT` LIKE $subject";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
			  echo "Ticket #: " . $row["TICKETNUM"]. " <br> Subject: " . $row["SUBJECT"]." <br> TITLE: " . $row["TITLE"]." <br> Price:  $". $row["PRICE"]." <br> Email: " . $row["EMAIL"]. " <br> Description: " . $row["DESCRIPTION"]. "<br>";
			  printf("------------------------------------------------------------------------------------------------------------------------------------------------------------ <br>");
          }
		} else {
          echo "There are no current entries that match your criteria. Please check back later, or edit your search " . "<br>";
		  //<td><input type=\"radio\" name=\"RadioGroup1\" value=" . $x ." id=\"RadioGroup1_" . $x . "\"></td> <td>Ticket #: " . $row["Ticket"]. "</td> <td>- Description: " . $row["Description"]. "</td> <td>Email: " . $row["Email"]. "</td>";
		}
		$conn->close();
		//echo "Ticket #: " . $row["TICKETNUM"]. " |XXXX| Subject: " . $row["SUBJECT"]." |-----| TITLE: " . $row["TITLE"]." |-----| Price:  $". $row["PRICE"]." |----| Email: " . $row["EMAIL"]. "|----| Description: " . $row[DESCRIPTION]. "<br>";
		?>	

