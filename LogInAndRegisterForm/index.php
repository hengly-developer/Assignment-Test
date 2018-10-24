<?php

    if (isset($_POST['SignUp'])) {

        $error = '';
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        $Date = $_POST['Date'];
        $Month = $_POST['Month'];
        $Year = $_POST['Year'];
        $Gender = $_POST['Gender'];
        $Mobile = $_POST['Mobile'];
        $Email = $_POST['Email'];
        $ConfirmEmail = $_POST['ConfirmEmail'];
        $Address = $_POST['Address'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $Zip = $_POST['Zip'];
        $Country = $_POST['Country'];
        

        $my_file = 'mydata.txt';
        $file_open = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);

		fwrite($file_open,'FullName: '.$FirstName.' '.$LastName."\n");
		fwrite($file_open, 'Password: '.$Password."\n");
		fwrite($file_open, 'Date: '.$Date."\n");
		fwrite($file_open, 'Month: '.$Month."\n");
		fwrite($file_open, 'Year: '.$Year."\n");
		fwrite($file_open, 'Gender: '.$Gender."\n");
		fwrite($file_open, 'Mobile: '.$Mobile."\n");
		fwrite($file_open, 'Email: '.$Email."\n");
		fwrite($file_open, 'Address: '.$Address."\n");
		fwrite($file_open, 'City: '.$City."\n");
		fwrite($file_open, 'State: '.$State."\n");
		fwrite($file_open, 'Zip: '.$Zip."\n");
		fwrite($file_open, 'Country: '.$Country."\n\n");

        fclose($file_open);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>LogIn And Register</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">		
</head>
<body>
	<br>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>My Account Login</h3>
				<br>
				<form>
					<div class="form-group">
						<label>Username</label>
						<div class="input-group mb-6">
							<input type="text" id="txtUsername" class="form-control border-right-0" aria-label="Recipient's username" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<span class="input-group-text border-left-0 bg-white" id="basic-addon2"><i class="fa fa-user"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
					<label>Password</label>
						<div class="input-group mb-6">
							<input type="text" id="txtPassword" class="form-control border-right-0" aria-label="Recipient's username" aria-describedby="basic-addon2">
							<div class="input-group-prepend bg-white">
								<span class="input-group-text border-left-0 bg-white" id="basic-addon2"><i class="fa fa-lock"></i></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn-color btn">Log In</button>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="forgot">Forgot password?</a>
					</div>
					<div class="form-group">
						<p>------------------ Or Sign In With ------------------<p>
					</div>
					<div class="form-group">

						<img src="img/twitter.png" alt="">	
						&nbsp;&nbsp;&nbsp;	
						<img src="img/facebook.png" alt="">	
						&nbsp;&nbsp;&nbsp;
						<img src="img/google-plus.png" alt="">	

					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-7">
				<h3>Registration</h3>
				<br>
				<form method="post">
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">First Name*</label>
						<div class="col-sm-9">
						<input type="text" class="form-control" name="FirstName">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-3 col-form-label">Last Name*</label>
						<div class="col-sm-9">
						<input type="text" class="form-control" name="LastName">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputEmail3" class="col-sm-3 col-form-label">Password*</label>
						<div class="col-sm-9">
						<input type="password" class="form-control" name="Password">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-3 col-form-label">Confirm Password*</label>
						<div class="col-sm-9">
						<input type="password" class="form-control" name="ConfirmPassword">
						<span name="c_error"></span>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-3 col-form-label">Date of Birth*</label>
						<div class="col">
						<input type="text" class="form-control" name="Month">
						</div>
						<div class="col">
						<input type="text" class="form-control" name="Date">
						</div>
						<div class="col-2">
						<input type="text" class="form-control" name="Year">
						</div>
						<div class="col">
						<label for="inputPassword3" class="col-sm-2 col-form-label">Gender</label>
						</div>
						<div class="col-2">
						<select class="custom-select mr-sm-2" name="Gender">
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-3 col-form-label">Mobile/Cell No.*</label>
						<div class="col-sm-9">
						<input type="text" class="form-control" name="Mobile">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-3 col-form-label">E-Mail*</label>
						<div class="col-sm-9">
						<input type="email" class="form-control" name="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-3 col-form-label">Confirm E-Mail*</label>
						<div class="col-sm-9">
						<input type="email" class="form-control" name="ConfirmEmail">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword3" class="col-sm-3 col-form-label">Address*</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="Address" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label"></label>
						<div class="col-md-4 mb-3">
							<label for="validationCustom01">City*</label>
							<input type="text" class="form-control" name="City" required>
						</div>
						<div class="col-md-5 mb-3">
							<label for="validationCustom01">State*</label>
							<input type="text" class="form-control" name="State" required>
						</div>
					</div>
					<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label"></label>
						<div class="col-sm-9">
							<label for="validationCustom01">Zip/Postal Code*</label>
							<input type="text" class="form-control" name="Zip" required>
						</div>
					</div>
					<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label"></label>
						<div class="col-sm-9">
							<label for="validationCustom01">Country*</label>
							<input type="text" class="form-control" name="Country" required>
						</div>
					</div>
					<div class="form-group row">
					<label for="inputPassword3" class="col-sm-3 col-form-label"></label>
						<div class="col-sm-9">
						<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
						<label class="form-check-label" for="invalidCheck">
							Agreed to Terms and Conditions
						</label>
						</div>
						<br>
						<input class="btn-Signup btn" name="SignUp" type="submit" value="Sign Up"/>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>


<script rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<style>
	.btn-color{
		background-color:#FEC107;
		color: #FFFFFF;
		width: 150px;
	}
	.forgot{
		color: #000;
	}
	.twitter{
		background-color:#FEC107;
	}
	.btn-Signup{
		background-color: #70DA44;
		color: #FFFFFF;
		width: 250px;
	}
</style>