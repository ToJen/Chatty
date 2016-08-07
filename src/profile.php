<?php

/*
  CS3715 FINAL PROJECT
  MEMBERS: KELWIN JOANES, OLUWATOMISIN JENROLA, SAAHIL BUDHRANI
  DATE SUBMITTED: 29/03/16
  WEB APP NAME: CHATTY
 */

	// start session
	session_start();

	include "header.php";

	// retrieve username, first and last name of user from session array
	$uname = $_SESSION['uName'];
	$fname = $_SESSION['fName'];
	$lname = $_SESSION['lName'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body id="chatPage">
		<div id="bar">
			<span class="header"><a href="index.php"><img src="img/logo.png" alt="Chatty" height="50px"></a></span>
			<span class="right">
				<div class="dropdown">
					<span class="droplink"><?php echo "$fname $lname"; ?></span>
					<div class="dropdown-content">
						<a href="profile.php">Profile</a>
						<a href="logout.php">Logout</a>
					</div>
				</div>
			</span>
		</div>
		<br />
		<?php
			// variables for sql connection 
			$servername = "mysql.cs.mun.ca";
			$username = "cs3715_kssj13";
			$password = "orlando1";
			$database = "cs3715_kssj13";

			// establish sql connection
			$conn = new mysqli($servername, $username, $password, $database);

			// select all data of current user
			$sql = "select * from Info where username = '$uname'";

			// run and save query
			$result = $conn->query($sql);

			// If exactly 1 record is returned, then update the session array accordingly
			if($result->num_rows == 1)
			{
				while($row = $result->fetch_assoc())
				{
					$_SESSION["email"]   = $row["email"];
					$_SESSION["pnum"]    = $row["phonenum"];
					$_SESSION["sex"]     = $row["sex"];
					$_SESSION["dob"]     = $row["dob"];
					$_SESSION["country"] = $row["Country"];
				}
			}

			// print all the data in a table with option to update
			echo "<table id=\"tbl\" align=\"center\"><tr>";
			echo "<th colspan=\"2\">Profile</th></tr><tr>";
			echo "<td><b>Username:</b> </td><td>$uname</td></tr><tr>";
			echo "<td><b>First Name:</b> </td><td>$fname</td></tr><tr>";
			echo "<td><b>Last Name:</b> </td><td>$lname</td></tr><tr>";
			echo "<td><b>Email:</b> </td><td>" . $_SESSION["email"] . "</td></tr><tr>";
			echo "<td><b>Phone no.:</b> </td><td>" . $_SESSION["pnum"] . "</td></tr><tr>";
			echo "<td><b>Sex:</b> </td><td>" . $_SESSION["sex"] . "</td></tr><tr>";
			echo "<td><b>DOB:</b> </td><td>" . $_SESSION["dob"] . "</td></tr><tr>";
			echo "<td><b>Country:</b> </td><td>" . $_SESSION["country"] . "</td></tr><tr>";
			echo "<td colspan=\"2\" align=\"center\"><br /><br /><span class=\"link\"><a href=\"edit.php\">Edit Profile</a></span></td></tr></table>";
		?>


	</body>
</html>