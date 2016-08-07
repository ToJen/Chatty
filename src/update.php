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
	$uname = $_SESSION['uName'];

	// variables for sql connection 
	$servername = "mysql.cs.mun.ca";
	$username = "cs3715_ooj326";
	$password = "opendoc2";
	$database = "cs3715_ooj326";
	
	// establish sql connection
	$conn = new mysqli($servername, $username, $password, $database);

	// retrieve all details from POST array
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$mail = $_POST['email'];
	$num = $_POST['phone_num'];
	$sex = $_POST['gender'];
	$dob = $_POST['DOBYear']. "-". $_POST['DOBMonth'] ."-". $_POST['DOBDay'];
	$country = $_POST['country'];

	// update user details
	$sql = "update Info set fName = '$fname', lName = '$lname', email = '$mail', phonenum = '$num', sex = '$sex', dob = '$dob', Country = '$country' 
	       where username = '$uname';";

	// if update is successful then return true
	if($conn->query($sql) === TRUE)
	{
		echo "true";
	}
	// otherwise return false
	else
		echo "false";
	
	// close sql connection
	$conn->close();

?>