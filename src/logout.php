<?php

/*
  CS3715 FINAL PROJECT
  MEMBERS: KELWIN JOANES, OLUWATOMISIN JENROLA, SAAHIL BUDHRANI
  DATE SUBMITTED: 29/03/16
  WEB APP NAME: CHATTY
 */

	// start session
	session_start();

	// get username from session array
	$user = $_SESSION['uName'];

	// variables for sql connection 
	$servername = "mysql.cs.mun.ca";
	$username = "cs3715_ooj326";
	$password = "opendoc2";
	$database = "cs3715_ooj326";

	// establish sql connection
	$conn = new mysqli($servername, $username, $password, $database);

	// set user's online status to 0
	$update = "update Info set online = 0 where username = '$user';";

	// run the update query
	$conn->query($update);

	// select the users who are online
	$sql = "select username from Info where online = 1;";

	// run and save the query
	$result = $conn->query($sql);

	// if no users are online then overwrite chat log file
	if($result->num_rows == 0)
	{
		$src = "data/log.txt";
		file_put_contents($src, "");
	}

	// close sql connection
	$conn->close();

	// unset all session variables
	$_SESSION = array();

	// destroy the session
	session_destroy();

	// redirect to index
	header("location: index.php");
?>