<?php

/*
  CS3715 FINAL PROJECT
  MEMBERS: KELWIN JOANES, OLUWATOMISIN JENROLA, SAAHIL BUDHRANI
  DATE SUBMITTED: 29/03/16
  WEB APP NAME: CHATTY
 */

	// start session
	session_start();

	// if either username or password field is empty then return false
	if(!isset($_POST['username']) || !isset($_POST['password'])) 
	{
		echo "false";
	}
	// otherwise do the following
	else
	{
		// variables for sql connection 
		$servername = "YOUR_SERVER_NAME";
		$username = "YOUR_USERNAME";
		$password = "YOUR_PASSWORD";
		$database = "YOUR_DB";

		// establish sql connection
		$conn = new mysqli($servername, $username, $password, $database);

		// retrieve username and password from POST array
		$uname = $_POST['username'];
		$pass = $_POST['password'];

		// select first name, last name and online status of user
		$sql = "select fName, lName, online from Info where username = '$uname' and password = '$pass';";

		// run and save query
		$result = $conn->query($sql);

		// if result contains single row then retrieve the first name, last name and online status of user
		if($result->num_rows == 1)
		{
			while($row = $result->fetch_assoc()) 
		    {
		        $fname  = $row["fName"];
		        $lname  = $row["lName"];
		    	$online	= $row["online"];
		    }

		    // if user is already logged in (i.e. online = 1), then return online
		    if($online == 1)
		    {
		    	echo "online";
		    }
		    // otherwise update the session array variables and set online status to 1, then return true
		    else
		    {
		    	$_SESSION["fName"] = $fname;
		    	$_SESSION["lName"] = $lname;
		    	$_SESSION["uName"] = $uname;
				$update = "update Info set online = 1 where username = '$uname'";
				$conn->query($update);
				
				echo "true";
		    }
		}
		// return false if query does not return a single row
		else
			echo "false";
			
	}
	
	// close sql connection
	$conn->close();
?>