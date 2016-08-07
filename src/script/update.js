// file: update.js

// when document is loaded run the following
$(document).ready(function() {
	// attach function to execute on click of submit button
	$("#update").click(function(e) {
		// prevent form from submitting data and resetting fields
		e.preventDefault();

		// retrieve all data from form
		var fName = document.getElementById("fName").value;
		var sName = document.getElementById("sName").value;
		var email = document.getElementById("email").value;
		var pNum = document.getElementById("pNum").value;
		var gender = document.getElementsByClassName("gender");
		var day = document.getElementById("day");
		var month = document.getElementById("month");
		var year = document.getElementById("year");
		var country = document.getElementById("country");

		// retrieve values from selects
		var dsel = day[day.selectedIndex].value;
		var msel = month[month.selectedIndex].value;
		var ysel = year[year.selectedIndex].value;
		var csel = country[country.selectedIndex].value;

		// flag for checking if every field is filled
		var filled = true;

		// check if fields are empty **ALL fields are required**
		if(fName=="" || fName==null) {
			document.getElementById("fErr").innerHTML = "*Your first name is required.";
			document.getElementById("fErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("fErr").style.display = "none";
		}

		if(sName=="" || sName==null) {
			document.getElementById("sErr").innerHTML = "*Your last name is required.";
			document.getElementById("sErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("sErr").style.display = "none";
		}

		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		
		if(re.test(email)==false) {
			document.getElementById("eErr").innerHTML = "*Please specify a valid email.";
			document.getElementById("eErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("eErr").style.display = "none";
		}

		if(email=="" || email==null) {
			document.getElementById("eErr").innerHTML = "*Your email is required.";
			document.getElementById("eErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("eErr").style.display = "none";
		}

		if(pNum=="" || pNum==null) {
			document.getElementById("pErr").innerHTML = "*Your phone number is required.";
			document.getElementById("pErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("pErr").style.display = "none";
		}

		if(isNaN(pNum)) {
			document.getElementById("pErr").innerHTML = "*You need to specify a number.";
			document.getElementById("pErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("pErr").style.display = "none";
		}

		if(!gender[0].checked && !gender[1].checked && !gender[2].checked) {
			document.getElementById("gErr").innerHTML = "*Please select an option.";
			document.getElementById("gErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("gErr").style.display = "none";
		}

		if(dsel=="" || msel=="" || ysel=="") {
			document.getElementById("dErr").innerHTML = "*Please provide a complete date.";
			document.getElementById("dErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("dErr").style.display = "none";
		}

		if(csel=="") {
			document.getElementById("cErr").innerHTML = "*Please select a country.";
			document.getElementById("cErr").style.display = "inline";
			filled = false;
		}
		else{
			document.getElementById("cErr").style.display = "none";
		}

		// if all fields are filled then submit data to be updated in the database
		if(filled)
		{
			// set the gender accordingly
			if(gender[0].checked)
				var sex = "Male";
			else if(gender[1].checked)
				var sex = "Female";
			else
				var sex = "Other";

			// use ajax to send all data to update.php for updating the data of current user
			$.ajax({
				type: "POST",
				url:  "update.php",
				data: {first_name: fName, last_name: sName, email: email, phone_num: pNum, 
					   gender: sex, DOBYear: ysel, DOBMonth: msel, DOBDay: dsel, 
					   country: csel},
				success: function(data){
					// for debugging
					console.log(data);
					// if data updated successfully then redirect to index.php
					if(data == 'true')
						window.location = "index.php";
				}
			});
		}

	});

	// attach function to execute on click of reset button
	$("#reset").click(function(f) {
		// reset all errors as well as each field
		document.getElementById("fErr").style.display = "none";
		document.getElementById("sErr").style.display = "none";
		document.getElementById("eErr").style.display = "none";
		document.getElementById("pErr").style.display = "none";
		document.getElementById("pErr").style.display = "none";
		document.getElementById("gErr").style.display = "none";
		document.getElementById("dErr").style.display = "none";
		document.getElementById("cErr").style.display = "none";
		document.getElementById("uErr").style.display = "none";
		document.getElementById("pdErr").style.display = "none";

	});

});