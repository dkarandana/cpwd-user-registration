<?php
	                                                                                   
// jSON URL which should be requested
$json_url = "https://restcountries.eu/rest/v2/all";

// Initializing curl
$ch = curl_init( $json_url );

// Configuring curl options
$options = array(
CURLOPT_RETURNTRANSFER => true,
CURLOPT_HTTPHEADER => array('Content-type: application/json')
);
// Setting curl options
curl_setopt_array( $ch, $options );
// Getting results
$countries = curl_exec($ch); // Getting jSON result string
$countryList = json_decode($countries);

// close cURL resource, and free up system resources
curl_close($ch);
?>


<!DOCTYPE html>
<html>
<head>
	<title>User Registration form</title>
	<style type="text/css">
		form{
			width: 400px;
		}
		fieldset.sub{
			border:none;
		}
	/*	input,label{
			display: inline-block;
		}*/
	</style>
</head>
<body>
	<form method="post" name="user-registration">
		<fieldset>
			<legend>Personal Data</legend>
			<fieldset class=sub>
				<label>First Name:</label>
				<input type="text" name="f_name"/>
			</fieldset>
			
			<fieldset class=sub>
				<label>Last Name:</label>
				<input type="text" name="l_name"/>
			</fieldset>
			<fieldset class=sub>
				<label>Date Of Birth:</label>
				<input type="text" name="dob"/>
			</fieldset>
			
			<fieldset class=sub>
				<legend>Gender:</legend>
				<input id="gender_male" type="radio" name="gender" value="male"/>
				<label for="gender_male">Male</label>
				<input id="gender_female" type="radio" name="gender" value="female"/>
				<label for="gender_female">Female</label>
			</fieldset>

			<fieldset>
				<legend>Contacts</legend>
				<fieldset class=sub>
					<label>Street Line 1:</label>
					<input type="text" name="address_line1"/>
				</fieldset>
				
				<fieldset class=sub>
					<label>Street Line 2:</label>
					<input type="text" name="address_line2"/>
				</fieldset>
				<fieldset class=sub>
					<label>City:</label>
					<input type="text" name="city"/>
				</fieldset>

				<fieldset class=sub>
					<label>Postal Code:</label>
					<input type="text" name="postal_code"/>
				</fieldset>

				<fieldset class=sub>
					<label>Country:</label>
					<input type="text" name="country"/>
				</fieldset>
			</fieldset>

			
		</fieldset>
		
	</form>

</body>
</html>