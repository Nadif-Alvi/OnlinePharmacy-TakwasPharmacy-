<?php
   require('Include/config.php');
	require ('Include/db.php');
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT Pid FROM passenger WHERE Pname = '$myusername' and Ppass = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
 
		
      if($count == 1) {
         $_SESSION['username'] = $myusername;
         
         header("location: Passenger/Profile.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
<link rel="stylesheet" type="text/css" href="CSS/prac.css">
	<?php include('Include/Header.php'); ?>
		<div class='floatcenter'>
			<div class="container">
				<form method="POST" action="" class="myform-r">
					<h1>Log In</h1>
					<div class="form-group-r">
							<label>User Name:</label>
							<input title="Alphabates only" type="text" name="username">
					</div>
					<div class="form-group-r">
						<label>Type Your Password:</label>
						<input title="Password length 4 to 8" type="password" name="password">
					</div>
					<div class="wrapper">
						<input class="button-rs" type="submit" name="submit" value="Submit">
					</div>
					<label style="font-size: 20px">By pressing the submit button you are accepting our <i><bold>Terms and Conditions</bold></i></label>
					
			</form>	
				
			</div>
			
		</div>

		
<?php include('Include/Footer.php'); ?>