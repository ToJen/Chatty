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

	// get session variables for setting field values
	$uname   = $_SESSION['uName'];
	$fname   = $_SESSION['fName'];
	$lname   = $_SESSION['lName'];
	$email   = $_SESSION['email'];
	$pnum    = $_SESSION['pnum'];
	$sex     = $_SESSION['sex'];
	$dob     = $_SESSION['dob'];
	$country = $_SESSION['country'];

	// break down date into year, month and day
	$date = explode("-",$dob);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Update Profile</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script type="text/javascript" src="script/update.js"></script>
		<script src="script/update.js"></script>
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
		<form name="form" id="registration" action="" method="POST">
			<table id="tbl" align="center">
				<tr>
				<th colspan="2">Edit Profile</th>
				</tr>
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="first_name" id="fName" placeholder="First name" <?php echo "value='$fname'"; ?>></td>
				</tr>
				<tr><td></td><td><p class="error" id="fErr"></p></td><tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="last_name" id="sName" placeholder="Last name" <?php echo "value='$lname'"; ?>></td>
				</tr>
				<tr><td></td><td><p class="error" id="sErr"></p></td></tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" id="email" placeholder="Email address" <?php echo "value='$email'"; ?>></td>
				</tr>
				<tr><td></td><td><p class="error" id="eErr"></p></td></tr>
				<tr>
					<td>Phone number:</td>
					<td><input type="text" name="phone_num" id="pNum" placeholder="Phone number" <?php echo "value='$pnum'"; ?>></td>
				</tr>
				<tr><td></td><td><p class="error" id="pErr"></p></td></tr>
				<tr>
					<td>Sex:</td>
					<td>
						<input class="gender" type="radio" name="gender" value="male" id="male"  <?php if($sex == 'Male') echo "checked='checked'"; ?>><label for="male"><span><span></span></span>Male</label>&nbsp;
						<input class="gender" type="radio" name="gender" value="female" id="female" <?php if($sex == 'Female') echo "checked='checked'"; ?>><label for="female"><span><span></span></span>Female</label>&nbsp;
						<input class="gender" type="radio" name="gender" value="other" id="other" <?php if($sex == 'Other') echo "checked='checked'"; ?>><label for="other"><span><span></span></span>Other</label>
					</td>
				</tr>
				<tr><td></td><td><p class="error" id="gErr"></p></td></tr>
				<tr>
					<td>Date of Birth:</td>
					<td>
						<select name="DOBMonth" id="month">
							<option value="">Month</option>
							<option value="01" <?php if($date[1] == '01') echo "selected='selected'"; ?>>January</option>
							<option value="02" <?php if($date[1] == '02') echo "selected='selected'"; ?>>February</option>
							<option value="03" <?php if($date[1] == '03') echo "selected='selected'"; ?>>March</option>
							<option value="04" <?php if($date[1] == '04') echo "selected='selected'"; ?>>April</option>
							<option value="05" <?php if($date[1] == '05') echo "selected='selected'"; ?>>May</option>
							<option value="06" <?php if($date[1] == '06') echo "selected='selected'"; ?>>June</option>
							<option value="07" <?php if($date[1] == '07') echo "selected='selected'"; ?>>July</option>
							<option value="08" <?php if($date[1] == '08') echo "selected='selected'"; ?>>August</option>
							<option value="09" <?php if($date[1] == '09') echo "selected='selected'"; ?>>September</option>
							<option value="10" <?php if($date[1] == '10') echo "selected='selected'"; ?>>October</option>
							<option value="11" <?php if($date[1] == '11') echo "selected='selected'"; ?>>November</option>
							<option value="12" <?php if($date[1] == '12') echo "selected='selected'"; ?>>December</option>
						</select>

						<select name="DOBDay" id="day">
							<option value="">Day&nbsp;</option>
							<option value="1"  <?php if($date[2] == '01') echo "selected='selected'"; ?>>1</option>
							<option value="2"  <?php if($date[2] == '02') echo "selected='selected'"; ?>>2</option>
							<option value="3"  <?php if($date[2] == '03') echo "selected='selected'"; ?>>3</option>
							<option value="4"  <?php if($date[2] == '04') echo "selected='selected'"; ?>>4</option>
							<option value="5"  <?php if($date[2] == '05') echo "selected='selected'"; ?>>5</option>
							<option value="6"  <?php if($date[2] == '06') echo "selected='selected'"; ?>>6</option>
							<option value="7"  <?php if($date[2] == '07') echo "selected='selected'"; ?>>7</option>
							<option value="8"  <?php if($date[2] == '08') echo "selected='selected'"; ?>>8</option>
							<option value="9"  <?php if($date[2] == '09') echo "selected='selected'"; ?>>9</option>
							<option value="10" <?php if($date[2] == '10') echo "selected='selected'"; ?>>10</option>
							<option value="11" <?php if($date[2] == '11') echo "selected='selected'"; ?>>11</option>
							<option value="12" <?php if($date[2] == '12') echo "selected='selected'"; ?>>12</option>
							<option value="13" <?php if($date[2] == '13') echo "selected='selected'"; ?>>13</option>
							<option value="14" <?php if($date[2] == '14') echo "selected='selected'"; ?>>14</option>
							<option value="15" <?php if($date[2] == '15') echo "selected='selected'"; ?>>15</option>
							<option value="16" <?php if($date[2] == '16') echo "selected='selected'"; ?>>16</option>
							<option value="17" <?php if($date[2] == '17') echo "selected='selected'"; ?>>17</option>
							<option value="18" <?php if($date[2] == '18') echo "selected='selected'"; ?>>18</option>
							<option value="19" <?php if($date[2] == '19') echo "selected='selected'"; ?>>19</option>
							<option value="20" <?php if($date[2] == '20') echo "selected='selected'"; ?>>20</option>
							<option value="21" <?php if($date[2] == '21') echo "selected='selected'"; ?>>21</option>
							<option value="22" <?php if($date[2] == '22') echo "selected='selected'"; ?>>22</option>
							<option value="23" <?php if($date[2] == '23') echo "selected='selected'"; ?>>23</option>
							<option value="24" <?php if($date[2] == '24') echo "selected='selected'"; ?>>24</option>
							<option value="25" <?php if($date[2] == '25') echo "selected='selected'"; ?>>25</option>
							<option value="26" <?php if($date[2] == '26') echo "selected='selected'"; ?>>26</option>
							<option value="27" <?php if($date[2] == '27') echo "selected='selected'"; ?>>27</option>
							<option value="28" <?php if($date[2] == '28') echo "selected='selected'"; ?>>28</option>
							<option value="29" <?php if($date[2] == '29') echo "selected='selected'"; ?>>29</option>
							<option value="30" <?php if($date[2] == '30') echo "selected='selected'"; ?>>30</option>
							<option value="31" <?php if($date[2] == '31') echo "selected='selected'"; ?>>31</option>
						</select>

						<select name="DOBYear" id="year">
							<option value="">Year</option>
							<option value="1998" <?php if($date[0] == '1998') echo "selected='selected'"; ?>>1998</option>
							<option value="1997" <?php if($date[0] == '1997') echo "selected='selected'"; ?>>1997</option>
							<option value="1996" <?php if($date[0] == '1996') echo "selected='selected'"; ?>>1996</option>
							<option value="1995" <?php if($date[0] == '1995') echo "selected='selected'"; ?>>1995</option>
							<option value="1994" <?php if($date[0] == '1994') echo "selected='selected'"; ?>>1994</option>
							<option value="1993" <?php if($date[0] == '1993') echo "selected='selected'"; ?>>1993</option>
							<option value="1992" <?php if($date[0] == '1992') echo "selected='selected'"; ?>>1992</option>
							<option value="1991" <?php if($date[0] == '1991') echo "selected='selected'"; ?>>1991</option>
							<option value="1990" <?php if($date[0] == '1990') echo "selected='selected'"; ?>>1990</option>
							<option value="1989" <?php if($date[0] == '1989') echo "selected='selected'"; ?>>1989</option>
							<option value="1988" <?php if($date[0] == '1988') echo "selected='selected'"; ?>>1988</option>
							<option value="1987" <?php if($date[0] == '1987') echo "selected='selected'"; ?>>1987</option>
							<option value="1986" <?php if($date[0] == '1986') echo "selected='selected'"; ?>>1986</option>
							<option value="1985" <?php if($date[0] == '1985') echo "selected='selected'"; ?>>1985</option>
							<option value="1984" <?php if($date[0] == '1984') echo "selected='selected'"; ?>>1984</option>
							<option value="1983" <?php if($date[0] == '1983') echo "selected='selected'"; ?>>1983</option>
							<option value="1982" <?php if($date[0] == '1982') echo "selected='selected'"; ?>>1982</option>
							<option value="1981" <?php if($date[0] == '1981') echo "selected='selected'"; ?>>1981</option>
							<option value="1980" <?php if($date[0] == '1980') echo "selected='selected'"; ?>>1980</option>
							<option value="1979" <?php if($date[0] == '1979') echo "selected='selected'"; ?>>1979</option>
							<option value="1978" <?php if($date[0] == '1978') echo "selected='selected'"; ?>>1978</option>
							<option value="1977" <?php if($date[0] == '1977') echo "selected='selected'"; ?>>1977</option>
							<option value="1976" <?php if($date[0] == '1976') echo "selected='selected'"; ?>>1976</option>
							<option value="1975" <?php if($date[0] == '1975') echo "selected='selected'"; ?>>1975</option>
							<option value="1974" <?php if($date[0] == '1974') echo "selected='selected'"; ?>>1974</option>
							<option value="1973" <?php if($date[0] == '1973') echo "selected='selected'"; ?>>1973</option>
							<option value="1972" <?php if($date[0] == '1972') echo "selected='selected'"; ?>>1972</option>
							<option value="1971" <?php if($date[0] == '1971') echo "selected='selected'"; ?>>1971</option>
							<option value="1970" <?php if($date[0] == '1970') echo "selected='selected'"; ?>>1970</option>
							<option value="1969" <?php if($date[0] == '1969') echo "selected='selected'"; ?>>1969</option>
							<option value="1968" <?php if($date[0] == '1968') echo "selected='selected'"; ?>>1968</option>
							<option value="1967" <?php if($date[0] == '1967') echo "selected='selected'"; ?>>1967</option>
							<option value="1966" <?php if($date[0] == '1966') echo "selected='selected'"; ?>>1966</option>
							<option value="1965" <?php if($date[0] == '1965') echo "selected='selected'"; ?>>1965</option>
							<option value="1964" <?php if($date[0] == '1964') echo "selected='selected'"; ?>>1964</option>
							<option value="1963" <?php if($date[0] == '1963') echo "selected='selected'"; ?>>1963</option>
							<option value="1962" <?php if($date[0] == '1962') echo "selected='selected'"; ?>>1962</option>
							<option value="1961" <?php if($date[0] == '1961') echo "selected='selected'"; ?>>1961</option>
							<option value="1960" <?php if($date[0] == '1960') echo "selected='selected'"; ?>>1960</option>
							<option value="1959" <?php if($date[0] == '1959') echo "selected='selected'"; ?>>1959</option>
							<option value="1958" <?php if($date[0] == '1958') echo "selected='selected'"; ?>>1958</option>
							<option value="1957" <?php if($date[0] == '1957') echo "selected='selected'"; ?>>1957</option>
							<option value="1956" <?php if($date[0] == '1956') echo "selected='selected'"; ?>>1956</option>
							<option value="1955" <?php if($date[0] == '1955') echo "selected='selected'"; ?>>1955</option>
							<option value="1954" <?php if($date[0] == '1954') echo "selected='selected'"; ?>>1954</option>
							<option value="1953" <?php if($date[0] == '1953') echo "selected='selected'"; ?>>1953</option>
							<option value="1952" <?php if($date[0] == '1952') echo "selected='selected'"; ?>>1952</option>
							<option value="1951" <?php if($date[0] == '1951') echo "selected='selected'"; ?>>1951</option>
							<option value="1950" <?php if($date[0] == '1950') echo "selected='selected'"; ?>>1950</option>
							<option value="1949" <?php if($date[0] == '1949') echo "selected='selected'"; ?>>1949</option>
							<option value="1948" <?php if($date[0] == '1948') echo "selected='selected'"; ?>>1948</option>
							<option value="1947" <?php if($date[0] == '1947') echo "selected='selected'"; ?>>1947</option>
						</select>
					</td>
				</tr>
				<tr><td></td><td><p class="error" id="dErr"></p></td></tr>
				<tr> 
					<td> Country:</td> 
					<td> 
						 <select name = "country" id="country">
						 	<option value="">Country</option>
						 	<option value="AF" <?php if($country == 'AF') echo "selected='selected'"; ?>>Afghanistan</option>
						 	<option value="AX" <?php if($country == 'AX') echo "selected='selected'"; ?>>Aland Islands</option>
						 	<option value="AL" <?php if($country == 'AL') echo "selected='selected'"; ?>>Albania</option>
						 	<option value="DZ" <?php if($country == 'DZ') echo "selected='selected'"; ?>>Algeria</option>
						 	<option value="AS" <?php if($country == 'AS') echo "selected='selected'"; ?>>American Samoa</option>
						 	<option value="AD" <?php if($country == 'AD') echo "selected='selected'"; ?>>Andorra</option>
						 	<option value="AO" <?php if($country == 'AO') echo "selected='selected'"; ?>>Angola</option>
						 	<option value="AI" <?php if($country == 'AI') echo "selected='selected'"; ?>>Anguilla</option>
						 	<option value="AQ" <?php if($country == 'AQ') echo "selected='selected'"; ?>>Antarctica</option>
						 	<option value="AG" <?php if($country == 'AG') echo "selected='selected'"; ?>>Antigua and Barbuda</option>
						 	<option value="AR" <?php if($country == 'AR') echo "selected='selected'"; ?>>Argentina</option>
						 	<option value="AM" <?php if($country == 'AM') echo "selected='selected'"; ?>>Armenia</option>
						 	<option value="AW" <?php if($country == 'AW') echo "selected='selected'"; ?>>Aruba</option>
						 	<option value="AU" <?php if($country == 'AU') echo "selected='selected'"; ?>>Australia</option>
						 	<option value="AT" <?php if($country == 'AT') echo "selected='selected'"; ?>>Austria</option>
						 	<option value="AZ" <?php if($country == 'AZ') echo "selected='selected'"; ?>>Azerbaijan</option>
						 	<option value="BS" <?php if($country == 'BS') echo "selected='selected'"; ?>>Bahamas</option>
						 	<option value="BH" <?php if($country == 'BH') echo "selected='selected'"; ?>>Bahrain</option>
						 	<option value="BD" <?php if($country == 'BD') echo "selected='selected'"; ?>>Bangladesh</option>
						 	<option value="BB" <?php if($country == 'BB') echo "selected='selected'"; ?>>Barbados</option>
						 	<option value="BY" <?php if($country == 'BY') echo "selected='selected'"; ?>>Belarus</option>
						 	<option value="BE" <?php if($country == 'BE') echo "selected='selected'"; ?>>Belgium</option>
						 	<option value="BZ" <?php if($country == 'BZ') echo "selected='selected'"; ?>>Belize</option>
						 	<option value="BJ" <?php if($country == 'BJ') echo "selected='selected'"; ?>>Benin</option>
						 	<option value="BM" <?php if($country == 'BM') echo "selected='selected'"; ?>>Bermuda</option>
						 	<option value="BT" <?php if($country == 'BT') echo "selected='selected'"; ?>>Bhutan</option>
						 	<option value="BO" <?php if($country == 'BO') echo "selected='selected'"; ?>>Bolivia</option>
						 	<option value="BA" <?php if($country == 'BA') echo "selected='selected'"; ?>>Bosnia and Herzegovina</option>
						 	<option value="BW" <?php if($country == 'BW') echo "selected='selected'"; ?>>Botswana</option>
						 	<option value="BV" <?php if($country == 'BV') echo "selected='selected'"; ?>>Bouvet Island</option>
						 	<option value="BR" <?php if($country == 'BR') echo "selected='selected'"; ?>>Brazil</option>
						 	<option value="BN" <?php if($country == 'BN') echo "selected='selected'"; ?>>Brunei Darussalam</option>
						 	<option value="BG" <?php if($country == 'BG') echo "selected='selected'"; ?>>Bulgaria</option>
						 	<option value="BF" <?php if($country == 'BF') echo "selected='selected'"; ?>>Burkina Faso</option>
						 	<option value="BI" <?php if($country == 'BI') echo "selected='selected'"; ?>>Burundi</option>
						 	<option value="KH" <?php if($country == 'KH') echo "selected='selected'"; ?>>Cambodia</option>
						 	<option value="CM" <?php if($country == 'CM') echo "selected='selected'"; ?>>Cameroon</option>
						 	<option value="CA" <?php if($country == 'CA') echo "selected='selected'"; ?>>Canada</option>
						 	<option value="CV" <?php if($country == 'CV') echo "selected='selected'"; ?>>Cape Verde</option>
						 	<option value="KY" <?php if($country == 'KY') echo "selected='selected'"; ?>>Cayman Islands</option>
						 	<option value="CF" <?php if($country == 'CF') echo "selected='selected'"; ?>>Central African Republic</option>
						 	<option value="TD" <?php if($country == 'TD') echo "selected='selected'"; ?>>Chad</option>
						 	<option value="CL" <?php if($country == 'CL') echo "selected='selected'"; ?>>Chile</option>
						 	<option value="CN" <?php if($country == 'CN') echo "selected='selected'"; ?>>China</option>
						 	<option value="CX" <?php if($country == 'CX') echo "selected='selected'"; ?>>Christmas Island</option>
						 	<option value="CC" <?php if($country == 'CC') echo "selected='selected'"; ?>>Cocos (Keeling) Islands</option>
						 	<option value="CO" <?php if($country == 'CO') echo "selected='selected'"; ?>>Colombia</option>
						 	<option value="KM" <?php if($country == 'KM') echo "selected='selected'"; ?>>Comoros</option>
						 	<option value="CG" <?php if($country == 'CG') echo "selected='selected'"; ?>>Congo</option>
						 	<option value="CD" <?php if($country == 'CD') echo "selected='selected'"; ?>>Congo, Democratic Republic of</option>
						 	<option value="CK" <?php if($country == 'CK') echo "selected='selected'"; ?>>Cook Islands</option>
						 	<option value="CR" <?php if($country == 'CR') echo "selected='selected'"; ?>>Costa Rica</option>
						 	<option value="CI" <?php if($country == 'CI') echo "selected='selected'"; ?>>Cote d'Ivoire</option>
						 	<option value="HR" <?php if($country == 'HR') echo "selected='selected'"; ?>>Croatia</option>
						 	<option value="CU" <?php if($country == 'CU') echo "selected='selected'"; ?>>Cuba</option>
						 	<option value="CW" <?php if($country == 'CW') echo "selected='selected'"; ?>>Curacao</option>
						 	<option value="CY" <?php if($country == 'CY') echo "selected='selected'"; ?>>Cyprus</option>
						 	<option value="CZ" <?php if($country == 'CZ') echo "selected='selected'"; ?>>Czech Republic</option>
						 	<option value="DK" <?php if($country == 'DK') echo "selected='selected'"; ?>>Denmark</option>
						 	<option value="DJ" <?php if($country == 'DJ') echo "selected='selected'"; ?>>Djibouti</option>
						 	<option value="DM" <?php if($country == 'DM') echo "selected='selected'"; ?>>Dominica</option>
						 	<option value="DO" <?php if($country == 'DO') echo "selected='selected'"; ?>>Dominican Republic</option>
						 	<option value="EC" <?php if($country == 'EC') echo "selected='selected'"; ?>>Ecuador</option>
						 	<option value="EG" <?php if($country == 'EG') echo "selected='selected'"; ?>>Egypt</option>
						 	<option value="SV" <?php if($country == 'SV') echo "selected='selected'"; ?>>El Salvador</option>
						 	<option value="GQ" <?php if($country == 'GQ') echo "selected='selected'"; ?>>Equatorial Guinea</option>
						 	<option value="ER" <?php if($country == 'ER') echo "selected='selected'"; ?>>Eritrea</option>
						 	<option value="EE" <?php if($country == 'EE') echo "selected='selected'"; ?>>Estonia</option>
						 	<option value="ET" <?php if($country == 'ET') echo "selected='selected'"; ?>>Ethiopia</option>
						 	<option value="FK" <?php if($country == 'FK') echo "selected='selected'"; ?>>Falkland Islands (Malvinas)</option>
						 	<option value="FO" <?php if($country == 'FO') echo "selected='selected'"; ?>>Faroe Islands</option>
						 	<option value="FJ" <?php if($country == 'FJ') echo "selected='selected'"; ?>>Fiji</option>
						 	<option value="FI" <?php if($country == 'FI') echo "selected='selected'"; ?>>Finland</option>
						 	<option value="FR" <?php if($country == 'FR') echo "selected='selected'"; ?>>France</option>
						 	<option value="GF" <?php if($country == 'GF') echo "selected='selected'"; ?>>French Guiana</option>
						 	<option value="PF" <?php if($country == 'PF') echo "selected='selected'"; ?>>French Polynesia</option>
						 	<option value="TF" <?php if($country == 'TF') echo "selected='selected'"; ?>>French Southern Territories</option>
						 	<option value="GA" <?php if($country == 'GA') echo "selected='selected'"; ?>>Gabon</option>
						 	<option value="GM" <?php if($country == 'GM') echo "selected='selected'"; ?>>Gambia</option>
						 	<option value="GE" <?php if($country == 'GE') echo "selected='selected'"; ?>>Georgia</option>
						 	<option value="DE" <?php if($country == 'DE') echo "selected='selected'"; ?>>Germany</option>
						 	<option value="GH" <?php if($country == 'GH') echo "selected='selected'"; ?>>Ghana</option>
						 	<option value="GI" <?php if($country == 'GI') echo "selected='selected'"; ?>>Gibraltar</option>
						 	<option value="GR" <?php if($country == 'GR') echo "selected='selected'"; ?>>Greece</option>
						 	<option value="GL" <?php if($country == 'GL') echo "selected='selected'"; ?>>Greenland</option>
						 	<option value="GD" <?php if($country == 'GD') echo "selected='selected'"; ?>>Grenada</option>
						 	<option value="GP" <?php if($country == 'GP') echo "selected='selected'"; ?>>Guadeloupe</option>
						 	<option value="GU" <?php if($country == 'GU') echo "selected='selected'"; ?>>Guam</option>
						 	<option value="GT" <?php if($country == 'GT') echo "selected='selected'"; ?>>Guatemala</option>
						 	<option value="GG" <?php if($country == 'GG') echo "selected='selected'"; ?>>Guernsey</option>
						 	<option value="GN" <?php if($country == 'GN') echo "selected='selected'"; ?>>Guinea</option>
						 	<option value="GW" <?php if($country == 'GW') echo "selected='selected'"; ?>>Guinea-Bissau</option>
						 	<option value="GY" <?php if($country == 'GY') echo "selected='selected'"; ?>>Guyana</option>
						 	<option value="HT" <?php if($country == 'HT') echo "selected='selected'"; ?>>Haiti</option>
						 	<option value="VA" <?php if($country == 'VA') echo "selected='selected'"; ?>>Holy See (Vatican City State)</option>
						 	<option value="HN" <?php if($country == 'HN') echo "selected='selected'"; ?>>Honduras</option>
						 	<option value="HK" <?php if($country == 'HK') echo "selected='selected'"; ?>>Hong Kong</option>
						 	<option value="HU" <?php if($country == 'HU') echo "selected='selected'"; ?>>Hungary</option>
						 	<option value="IS" <?php if($country == 'IS') echo "selected='selected'"; ?>>Iceland</option>
						 	<option value="IN" <?php if($country == 'IN') echo "selected='selected'"; ?>>India</option>
						 	<option value="ID" <?php if($country == 'ID') echo "selected='selected'"; ?>>Indonesia</option>
						 	<option value="IR" <?php if($country == 'IR') echo "selected='selected'"; ?>>Iran, Islamic Republic of</option>
						 	<option value="IQ" <?php if($country == 'IQ') echo "selected='selected'"; ?>>Iraq</option>
						 	<option value="IE" <?php if($country == 'IE') echo "selected='selected'"; ?>>Ireland</option>
						 	<option value="IM" <?php if($country == 'IM') echo "selected='selected'"; ?>>Isle of Man</option>
						 	<option value="IL" <?php if($country == 'IL') echo "selected='selected'"; ?>>Israel</option>
						 	<option value="IT" <?php if($country == 'IT') echo "selected='selected'"; ?>>Italy</option>
						 	<option value="JM" <?php if($country == 'JM') echo "selected='selected'"; ?>>Jamaica</option>
						 	<option value="JP" <?php if($country == 'JP') echo "selected='selected'"; ?>>Japan</option>
						 	<option value="JE" <?php if($country == 'JE') echo "selected='selected'"; ?>>Jersey</option>
						 	<option value="JO" <?php if($country == 'JO') echo "selected='selected'"; ?>>Jordan</option>
						 	<option value="KZ" <?php if($country == 'KZ') echo "selected='selected'"; ?>>Kazakhstan</option>
						 	<option value="KE" <?php if($country == 'KE') echo "selected='selected'"; ?>>Kenya</option>
						 	<option value="KI" <?php if($country == 'KI') echo "selected='selected'"; ?>>Kiribati</option>
						 	<option value="KR" <?php if($country == 'KR') echo "selected='selected'"; ?>>Korea, Republic of</option>
						 	<option value="KW" <?php if($country == 'KW') echo "selected='selected'"; ?>>Kuwait</option>
						 	<option value="KG" <?php if($country == 'KG') echo "selected='selected'"; ?>>Kyrgyzstan</option>
						 	<option value="LV" <?php if($country == 'LV') echo "selected='selected'"; ?>>Latvia</option>
						 	<option value="LB" <?php if($country == 'LB') echo "selected='selected'"; ?>>Lebanon</option>
						 	<option value="LS" <?php if($country == 'LS') echo "selected='selected'"; ?>>Lesotho</option>
						 	<option value="LR" <?php if($country == 'LR') echo "selected='selected'"; ?>>Liberia</option>
						 	<option value="LY" <?php if($country == 'LY') echo "selected='selected'"; ?>>Libya</option>
						 	<option value="LI" <?php if($country == 'LI') echo "selected='selected'"; ?>>Liechtenstein</option>
						 	<option value="LT" <?php if($country == 'LT') echo "selected='selected'"; ?>>Lithuania</option>
						 	<option value="LU" <?php if($country == 'LU') echo "selected='selected'"; ?>>Luxembourg</option>
						 	<option value="MO" <?php if($country == 'MO') echo "selected='selected'"; ?>>Macao</option>
						 	<option value="MG" <?php if($country == 'MG') echo "selected='selected'"; ?>>Madagascar</option>
						 	<option value="MW" <?php if($country == 'MW') echo "selected='selected'"; ?>>Malawi</option>
						 	<option value="MY" <?php if($country == 'MY') echo "selected='selected'"; ?>>Malaysia</option>
						 	<option value="MV" <?php if($country == 'MV') echo "selected='selected'"; ?>>Maldives</option>
						 	<option value="ML" <?php if($country == 'ML') echo "selected='selected'"; ?>>Mali</option>
						 	<option value="MT" <?php if($country == 'MT') echo "selected='selected'"; ?>>Malta</option>
						 	<option value="MH" <?php if($country == 'MH') echo "selected='selected'"; ?>>Marshall Islands</option>
						 	<option value="MQ" <?php if($country == 'MQ') echo "selected='selected'"; ?>>Martinique</option>
						 	<option value="MR" <?php if($country == 'MR') echo "selected='selected'"; ?>>Mauritania</option>
						 	<option value="MU" <?php if($country == 'MU') echo "selected='selected'"; ?>>Mauritius</option>
						 	<option value="YT" <?php if($country == 'YT') echo "selected='selected'"; ?>>Mayotte</option>
						 	<option value="MX" <?php if($country == 'MX') echo "selected='selected'"; ?>>Mexico</option>
						 	<option value="FM" <?php if($country == 'FM') echo "selected='selected'"; ?>>Micronesia</option>
						 	<option value="MD" <?php if($country == 'MD') echo "selected='selected'"; ?>>Moldova, Republic of</option>
						 	<option value="MC" <?php if($country == 'MC') echo "selected='selected'"; ?>>Monaco</option>
						 	<option value="MN" <?php if($country == 'MN') echo "selected='selected'"; ?>>Mongolia</option>
						 	<option value="ME" <?php if($country == 'ME') echo "selected='selected'"; ?>>Montenegro</option>
						 	<option value="MS" <?php if($country == 'MS') echo "selected='selected'"; ?>>Montserrat</option>
						 	<option value="MA" <?php if($country == 'MA') echo "selected='selected'"; ?>>Morocco</option>
						 	<option value="MZ" <?php if($country == 'MZ') echo "selected='selected'"; ?>>Mozambique</option>
						 	<option value="MM" <?php if($country == 'MM') echo "selected='selected'"; ?>>Myanmar</option>
						 	<option value="NA" <?php if($country == 'NA') echo "selected='selected'"; ?>>Namibia</option>
						 	<option value="NR" <?php if($country == 'NR') echo "selected='selected'"; ?>>Nauru</option>
						 	<option value="NP" <?php if($country == 'NP') echo "selected='selected'"; ?>>Nepal</option>
						 	<option value="NL" <?php if($country == 'NL') echo "selected='selected'"; ?>>Netherlands</option>
						 	<option value="NC" <?php if($country == 'NC') echo "selected='selected'"; ?>>New Caledonia</option>
						 	<option value="NZ" <?php if($country == 'NZ') echo "selected='selected'"; ?>>New Zealand</option>
						 	<option value="NI" <?php if($country == 'NI') echo "selected='selected'"; ?>>Nicaragua</option>
						 	<option value="NE" <?php if($country == 'NE') echo "selected='selected'"; ?>>Niger</option>
						 	<option value="NG" <?php if($country == 'NG') echo "selected='selected'"; ?>>Nigeria</option>
						 	<option value="NU" <?php if($country == 'NU') echo "selected='selected'"; ?>>Niue</option>
						 	<option value="NF" <?php if($country == 'NF') echo "selected='selected'"; ?>>Norfolk Island</option>
						 	<option value="MP" <?php if($country == 'MP') echo "selected='selected'"; ?>>Northern Mariana Islands</option>
						 	<option value="NO" <?php if($country == 'NO') echo "selected='selected'"; ?>>Norway</option>
						 	<option value="OM" <?php if($country == 'OM') echo "selected='selected'"; ?>>Oman</option>
						 	<option value="PK" <?php if($country == 'PK') echo "selected='selected'"; ?>>Pakistan</option>
						 	<option value="PW" <?php if($country == 'PW') echo "selected='selected'"; ?>>Palau</option>
						 	<option value="PS" <?php if($country == 'PS') echo "selected='selected'"; ?>>Palestinian Territory</option>
						 	<option value="PA" <?php if($country == 'PA') echo "selected='selected'"; ?>>Panama</option>
						 	<option value="PG" <?php if($country == 'PG') echo "selected='selected'"; ?>>Papua New Guinea</option>
						 	<option value="PY" <?php if($country == 'PY') echo "selected='selected'"; ?>>Paraguay</option>
						 	<option value="PE" <?php if($country == 'PE') echo "selected='selected'"; ?>>Peru</option>
						 	<option value="PH" <?php if($country == 'PH') echo "selected='selected'"; ?>>Philippines</option>
						 	<option value="PN" <?php if($country == 'PN') echo "selected='selected'"; ?>>Pitcairn</option>
						 	<option value="PL" <?php if($country == 'PL') echo "selected='selected'"; ?>>Poland</option>
						 	<option value="PT" <?php if($country == 'PT') echo "selected='selected'"; ?>>Portugal</option>
						 	<option value="PR" <?php if($country == 'PR') echo "selected='selected'"; ?>>Puerto Rico</option>
						 	<option value="QA" <?php if($country == 'QA') echo "selected='selected'"; ?>>Qatar</option>
						 	<option value="RE" <?php if($country == 'RE') echo "selected='selected'"; ?>>Reunion</option>
						 	<option value="RO" <?php if($country == 'RO') echo "selected='selected'"; ?>>Romania</option>
						 	<option value="RU" <?php if($country == 'RU') echo "selected='selected'"; ?>>Russian Federation</option>
						 	<option value="RW" <?php if($country == 'RW') echo "selected='selected'"; ?>>Rwanda</option>
						 	<option value="BL" <?php if($country == 'BL') echo "selected='selected'"; ?>>Saint Barthelemy</option>
						 	<option value="KN" <?php if($country == 'KN') echo "selected='selected'"; ?>>Saint Kitts and Nevis</option>
						 	<option value="LC" <?php if($country == 'LC') echo "selected='selected'"; ?>>Saint Lucia</option>
						 	<option value="MF" <?php if($country == 'MF') echo "selected='selected'"; ?>>Saint Martin (French part)</option>
						 	<option value="PM" <?php if($country == 'PM') echo "selected='selected'"; ?>>Saint Pierre and Miquelon</option>
							<option value="WS" <?php if($country == 'WS') echo "selected='selected'"; ?>>Samoa</option>
							<option value="SM" <?php if($country == 'SM') echo "selected='selected'"; ?>>San Marino</option>
							<option value="ST" <?php if($country == 'ST') echo "selected='selected'"; ?>>Sao Tome and Principe</option>
							<option value="SA" <?php if($country == 'SA') echo "selected='selected'"; ?>>Saudi Arabia</option>
							<option value="SN" <?php if($country == 'SN') echo "selected='selected'"; ?>>Senegal</option>
							<option value="RS" <?php if($country == 'RS') echo "selected='selected'"; ?>>Serbia</option>
							<option value="SC" <?php if($country == 'SC') echo "selected='selected'"; ?>>Seychelles</option>
							<option value="SL" <?php if($country == 'SL') echo "selected='selected'"; ?>>Sierra Leone</option>
							<option value="SG" <?php if($country == 'SG') echo "selected='selected'"; ?>>Singapore</option>
							<option value="SX" <?php if($country == 'SX') echo "selected='selected'"; ?>>Sint Maarten (Dutch part)</option>
							<option value="SK" <?php if($country == 'SK') echo "selected='selected'"; ?>>Slovakia</option>
							<option value="SI" <?php if($country == 'SI') echo "selected='selected'"; ?>>Slovenia</option>
							<option value="SB" <?php if($country == 'SB') echo "selected='selected'"; ?>>Solomon Islands</option>
							<option value="SO" <?php if($country == 'SO') echo "selected='selected'"; ?>>Somalia</option>
							<option value="ZA" <?php if($country == 'ZA') echo "selected='selected'"; ?>>South Africa</option>
							<option value="SS" <?php if($country == 'SS') echo "selected='selected'"; ?>>South Sudan</option>
							<option value="ES" <?php if($country == 'ES') echo "selected='selected'"; ?>>Spain</option>
							<option value="LK" <?php if($country == 'LK') echo "selected='selected'"; ?>>Sri Lanka</option>
							<option value="SD" <?php if($country == 'SD') echo "selected='selected'"; ?>>Sudan</option>
							<option value="SR" <?php if($country == 'SR') echo "selected='selected'"; ?>>Suriname</option>
							<option value="SJ" <?php if($country == 'SJ') echo "selected='selected'"; ?>>Svalbard and Jan Mayen</option>
							<option value="SZ" <?php if($country == 'SZ') echo "selected='selected'"; ?>>Swaziland</option>
							<option value="SE" <?php if($country == 'SE') echo "selected='selected'"; ?>>Sweden</option>
							<option value="CH" <?php if($country == 'CH') echo "selected='selected'"; ?>>Switzerland</option>
							<option value="SY" <?php if($country == 'SY') echo "selected='selected'"; ?>>Syrian Arab Republic</option>
							<option value="TW" <?php if($country == 'TW') echo "selected='selected'"; ?>>Taiwan, Province of China</option>
							<option value="TJ" <?php if($country == 'TJ') echo "selected='selected'"; ?>>Tajikistan</option>
							<option value="TZ" <?php if($country == 'TZ') echo "selected='selected'"; ?>>Tanzania, United Republic of</option>
							<option value="TH" <?php if($country == 'TH') echo "selected='selected'"; ?>>Thailand</option>
							<option value="TL" <?php if($country == 'TL') echo "selected='selected'"; ?>>Timor-Leste</option>
							<option value="TG" <?php if($country == 'TG') echo "selected='selected'"; ?>>Togo</option>
							<option value="TK" <?php if($country == 'TK') echo "selected='selected'"; ?>>Tokelau</option>
							<option value="TO" <?php if($country == 'TO') echo "selected='selected'"; ?>>Tonga</option>
							<option value="TT" <?php if($country == 'TT') echo "selected='selected'"; ?>>Trinidad and Tobago</option>
							<option value="TN" <?php if($country == 'TN') echo "selected='selected'"; ?>>Tunisia</option>
							<option value="TR" <?php if($country == 'TR') echo "selected='selected'"; ?>>Turkey</option>
							<option value="TM" <?php if($country == 'TM') echo "selected='selected'"; ?>>Turkmenistan</option>
							<option value="TC" <?php if($country == 'TC') echo "selected='selected'"; ?>>Turks and Caicos Islands</option>
							<option value="TV" <?php if($country == 'TV') echo "selected='selected'"; ?>>Tuvalu</option>
							<option value="UG" <?php if($country == 'UG') echo "selected='selected'"; ?>>Uganda</option>
							<option value="UA" <?php if($country == 'UA') echo "selected='selected'"; ?>>Ukraine</option>
							<option value="AE" <?php if($country == 'AE') echo "selected='selected'"; ?>>United Arab Emirates</option>
							<option value="GB" <?php if($country == 'GB') echo "selected='selected'"; ?>>United Kingdom</option>
							<option value="US" <?php if($country == 'US') echo "selected='selected'"; ?>>United States</option>
							<option value="UY" <?php if($country == 'UY') echo "selected='selected'"; ?>>Uruguay</option>
							<option value="UZ" <?php if($country == 'UZ') echo "selected='selected'"; ?>>Uzbekistan</option>
							<option value="VU" <?php if($country == 'VU') echo "selected='selected'"; ?>>Vanuatu</option>
							<option value="VE" <?php if($country == 'VE') echo "selected='selected'"; ?>>Venezuela</option>
							<option value="VN" <?php if($country == 'VN') echo "selected='selected'"; ?>>Viet Nam</option>
							<option value="VG" <?php if($country == 'VG') echo "selected='selected'"; ?>>Virgin Islands, British</option>
							<option value="VI" <?php if($country == 'VI') echo "selected='selected'"; ?>>Virgin Islands, U.S.</option>
							<option value="WF" <?php if($country == 'WF') echo "selected='selected'"; ?>>Wallis and Futuna</option>
							<option value="EH" <?php if($country == 'EH') echo "selected='selected'"; ?>>Western Sahara</option>
							<option value="YE" <?php if($country == 'YE') echo "selected='selected'"; ?>>Yemen</option>
							<option value="ZM" <?php if($country == 'ZM') echo "selected='selected'"; ?>>Zambia</option>
							<option value="ZW" <?php if($country == 'ZW') echo "selected='selected'"; ?>>Zimbabwe</option>
						</select>
					</td>
				</tr>
				<tr><td></td><td><p class="error" id="cErr"></p></td></tr>
				<tr align="center">
					<td colspan="2"><input type="submit" name="update" id="update" value="Update" />&nbsp;&nbsp;
					<input type="reset" name="reset"  value="Reset" id="reset"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>