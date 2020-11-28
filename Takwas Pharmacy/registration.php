<?php
	require('Include/config.php');	
	require('Include/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		$Pname=mysqli_real_escape_string($conn, $_POST['Pname']);
		$Ppass=mysqli_real_escape_string($conn, $_POST['Ppass']);
		$Ppassa=mysqli_real_escape_string($conn, $_POST['Ppassa']);
		$Phone=mysqli_real_escape_string($conn, $_POST['Phone']);
		$Email=mysqli_real_escape_string($conn, $_POST['Email']);
		$BG=mysqli_real_escape_string($conn, $_POST['BG']);
		$Address=mysqli_real_escape_string($conn, $_POST['Address']);
		$NID=mysqli_real_escape_string($conn, $_POST['NID']);
		if ($Ppass===$Ppassa) {
			$query = "INSERT INTO passenger(Pname,Ppass,Phone,Email,BG,Address,NID) VALUES('$Pname', '$Ppass', '$Phone','$Email','$BG','$Address', '$NID')";
			if(mysqli_query($conn, $query)){
			echo "Registration Sucessfull";
			} else {
			echo 'ERROR: '. mysqli_error($conn);
			}
			
		}
		else
		{
			echo "Password don't match or Invalid NID";
		}

	}

?>

<link rel="stylesheet" type="text/css" href="CSS/prac.css">
	<?php include('Include/Header.php'); ?>
		<div class='floatcenter'>

			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="myform-r">
					<h1>Registration Form</h1>
					<div class="msg"></div><br>
					<label style="font-size: 18px"><strong>*All Fields Are Required.</strong></label>
					<div class="form-group-r">
							<label>User Name:</label>
							<input title="Alphabates only" type="text" name="Pname" id="Pname" required="">
					</div>
					<div class="form-group-r">
						<label>Type Your Password:</label>
						<input title="Password length 4 to 8" type="password" name="Ppass" id="Ppass" required="">
					</div>
					<div class="form-group-r">
						<label>Type Your Password Again:</label>
						<input title="Password length 4 to 8" type="password" name="Ppassa" id="Ppassa" required="">
					</div>
					<div class="form-group-r">
						<label>Phone:</label>
						<input title="password" type="text" name="Phone" id="Phone"required="">
					</div>
					<div class="form-group-r">
						<label>Email:</label>
						<input title="Must be a valid Email" type="email" name="Email" id="Email" required="">
					</div>
					<div class="form-group-r">
						<label>Blood Group:</label>
						<input type="text" name="BG" id="BG" required="">
					</div>
					<div class="form-group-r">
						<label>Address:</label>
						<input type="text" name="Address" id="Address" required="">
					</div>
					<div class="form-group-r">
						<label>NID:</label>
						<input title="Must be Numeric only and length should be longer then 5" type="text" name="NID" id="NID" required="">
					</div>
					<div class="wrapper">
						<input class="button-rs" type="submit" name="submit" value="Submit">
					</div>
					<label style="font-size: 20px">By pressing the submit button you are accepting our <i><bold>Terms and Conditions</bold></i></label>
					
			</form>	
		</div>

		
<?php include('Include/Footer.php'); ?>