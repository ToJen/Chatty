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
	
	// get username from session array
	$uname = $_SESSION['uName'];

	// variables for sql connection 
	$servername = "mysql.cs.mun.ca";
	$username = "cs3715_ooj326";
	$password = "opendoc2";
	$database = "cs3715_ooj326";

	// establish sql connection
	$conn = new mysqli($servername, $username, $password, $database);

	// select first name, last name of user 
	$sql = "select fName, lName from Info where username = '$uname';";

	// run and save query
	$result = $conn->query($sql);

	if($result->num_rows == 1)
	{
		// update fname and lname if any changes were made
	    while($row = $result->fetch_assoc())
	    {
	    	$_SESSION['fName'] = $row["fName"];
	    	$_SESSION['lName'] = $row["lName"];
	    }
	}

	// close sql connection
	$conn->close();

	// retrieve first name and last name of user from session array
	$fname = $_SESSION['fName'];
	$lname = $_SESSION['lName'];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script type="text/javascript" src="script/chat.js"></script>
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

		<div id="container">
			<div id="online"></div>
			<div id="chatbox" onmouseover="disableAutoScroll()" onmouseout="enableAutoScroll()"></div>
		</div>

		<div id="chatContainer">
			<form id="message">
				<input type="text" id="chat" name="chat" placeholder="Enter your message here..." />
				<input type ="submit" id="submit" name="submit" value="Send" />
			</form>
		</div>

		<div id="img-upload">
			<form id="uploader" action="" method="post" enctype="multipart/form-data">
				<label for="fileToUpload">
				    <img src="img/upload_img_btn.png">
				</label>
			    <input type="file" name="fileToUpload" id="fileToUpload">
			    <input type="submit" value="Upload" id="upload">
			</form>
			<br />
			<span id="fileDetails">Please select a file (< 2MB)</span>
		</div>

		<br />
		<br />
		<br />
	</body>
</html>