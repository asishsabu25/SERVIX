<?php include('allhead.php'); ?> 
<script>
	//javascript validation for various fildss
	function validateForm() {
		var fname = document.forms[ "register" ][ "fname" ].value;
		var lname = document.forms[ "register" ][ "lname" ].value;
		//var faname = document.forms[ "register" ][ "faname" ].value;
		var course = document.forms[ "register" ][ "course" ].value;
		var dob = document.forms[ "register" ][ "dob" ].value;
		var addrs = document.forms[ "register" ][ "addrs" ].value;
		var gender = document.forms[ "register" ][ "gender" ].value;
		var phno = document.forms[ "register" ][ "phno" ].value;
		//var x = document.forms[ "register" ][ "email" ].value;
		//var atpos = x.indexOf( "@" );
		//var dotpos = x.lastIndexOf( "." );
		var pass = document.forms[ "register" ][ "pass" ].value;
		var cpass = document.forms[ "register" ][ "cpass" ].value;
		if ( fname == null || fname == "" ) {
			alert( "First Name must be filled out" );
			return false;
		}
		if ( lname == null || lname == "" ) {
			alert( "Last Name must be filled out" );
			return false;
		}
		

		if ( course == null || course == "" ) {
			alert( "Course must be filled out" );
			return false;
		}
		if ( dob == null || dob == "" ) {
			alert( "Date of birth must be filled out" );
			return false;
		}
		if ( addrs == null || addrs == "" ) {
			alert( "Address must be filled out" );
			return false;
		}
		if ( gender == null || gender == "" ) {
			alert( "Gender must be filled out" );
			return false;
		}
		if ( phno == null || phno == "" ) {
			alert( "Phone Number must be filled out" );
			return false;
		}
		//if ( atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length ) {
		//	alert( "Not a valid e-mail address" );
		//	return false;
		//}
		if ( pass == null || pass == "" ) {
			alert( "Password must be filled out" );
			return false;
		}
		if ( cpass == null || cpass == "" ) {
			alert( "Password must be filled out" );
			return false;
		}
	}
</script>

<div class="container" style="max-width: 1200px;">
	<div class="row">
		<?PHP
		include( "database.php" );
		if ( isset( $_POST[ 'submit' ] ) ) {
			$fname = $_POST[ 'fname' ];
			$lname = $_POST[ 'lname' ];
			//$faname = $_POST[ 'faname' ];
			//$course = $_POST[ 'course' ];
			$dob = $_POST[ 'dob' ];
			$addrs = $_POST[ 'addrs' ];
			$gender = $_POST[ 'gender' ];
			$phno = $_POST[ 'phno' ];
			$adn=$_POST['adn'];
			$email = $_POST[ 'email' ];
			$job= $_POST[ 'job' ];
			$pass = $_POST[ 'pass' ];
            $cpass=$_POST['cpass'];

            $r="worker";
			$done = "
			<center>
<div class='alert alert-success fade in __web-inspector-hide-shortcut__'' style='margin-top:10px;'>
<a href=' ' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>
<strong><h3 style='margin-top: 10px;
margin-bottom: 10px;'> Register Sucessfull!!!!!</h3>
</strong>
</div>
</center>
"; 


$d = "
<center>
<div class='alert alert-success fade in __web-inspector-hide-shortcut__'' style='margin-top:10px;'>
<a href=' ' class='close' data-dismiss='alert' aria-label='close' title='close'>&times;</a>
<strong><h3 style='margin-top: 10px;
margin-bottom: 10px;'> Password Not Mathed!!!!!</h3>
</strong>
</div>
</center>
"; 

         if($pass != $cpass)
		 { 
			echo $d;
			
		 }
		 else{
		
        $sql = "INSERT INTO `workers`(`First Name`, `Last Name`, `Address`,`Gender`, `Aadhar`, `Phno`, `role`, `email id`, `Password`) VALUES ('$fname','$lname','$addrs','$gender','$adn','$phno','$job','$email','$pass')";
			//close the connection
			mysqli_query( $connect, $sql );
            
            $sql_login="INSERT INTO `login` (`username`,`password`,`role`) VALUES ('$email','$pass','$r')";
            
            mysqli_query( $connect, $sql_login );

			echo $done;
		 }
		}

		?>

	</div>
	<div class="row">
		<div class="col-md-12">
			<form name="register" action="" method="POST" >
				<fieldset>
					<legend>
						<h3 style="padding-top: 25px;">Workers Registration Form </h3>
					</legend>
					<div class="control-group form-group">
						<div class="controls">
							<label>First Name: <span style="color: #ff0000;">*</span></label>
							<input type="text" class="form-control" name="fname" id="fname" maxlength="30" required>
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Last Name: <span style="color: #ff0000;">*</span></label>
							<input type="text" class="form-control" name="lname" id="lname" maxlength="30" required>
							<p class="help-block"></p>
						</div>
					</div>

					<!--<div class="control-group form-group">
						<div class="controls">
							<label>Father Name: <span style="color: #ff0000;">*</span></label>
							<input type="text" class="form-control" name="faname" id="faname" maxlength="30">
							<p class="help-block"></p>
						</div>
					</div> -->

					<!--<div class="control-group form-group">
						<div class="controls">
							<label>Course: <span style="color: #ff0000;">*</span></label>
							<input type="text" class="form-control" name="course" id="course" maxlength="10" required>
							<p class="help-block"></p>
						</div>
					</div>-->

					<!--<div class="control-group form-group">
					<div class="controls">
						<label>Course: <span style="color: #ff0000;width:100%;">*</span></label>
					
						<select class="form-control" name="course" id="course" maxlength="10" style=" width: 100%;height: 34px;padding: 6px 12px;";>
                                    <option value=""></option>
                                    <option value="MCA">MCA</option>
                                    <option value="BTECH">BTECH</option>
                                    <option value="MTECH">MTECH</option>
                                </select>
	                     </div>
	</div>-->


					<div class="control-group form-group">
						<div class="controls">
							<label>Date of Birth: <span style="color: #ff0000;">*</span></label>
							<input type="Date" class="form-control" name="dob" id="dob" required>
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Address: <span style="color: #ff0000;">*</span></label>
							<textarea class="form-control" name="addrs" id="addrs" required style=" margin: 0px 16px 0px 0px; height: 140px; width: 1125px;"></textarea>
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Gender: <span style="color: #ff0000;">*</span></label>
							<p>
								<label>
<input type="radio" name="gender" value="Male" id="Gender_0" checked>
Male</label>
							

								<label>
<input type="radio" name="gender" value="Female" id="Gender_1">
Female</label>
							
								<br>
							</p>
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Contact Number (format: without code only 10 digits): <span style="color: #ff0000;">*</span></label>
							<input type="tel" pattern="^\d{10}$" required class="form-control" name="phno" id="phno" maxlength="10">
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Aadhar Number : <span style="color: #ff0000;">*</span></label>
							<input type="tel" pattern="^\d{12}$" required class="form-control" name="adn" id="adn" maxlength="12">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Current Job Name: <span style="color: #ff0000;">*</span></label>
							<input type="text" class="form-control" name="job" id="job" maxlength="50">
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Email Id: <span style="color: #ff0000;">*</span></label>
							<input type="email" class="form-control" name="email" id="email" maxlength="50">
							<p class="help-block"></p>
						</div>
					</div>
					


					<div class="control-group form-group">
						<div class="controls">
							<label>Password: <span style="color: #ff0000;">*</span></label>
							<input type="password" class="form-control" name="pass" id="pass" maxlength="8"> <span style="color: #ff0000;" >*Max 8</span>
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Conform Password: <span style="color: #ff0000;">*</span></label>
							<input type="password" class="form-control" name="cpass" id="cpass" maxlength="8" required> <span style="color: #ff0000;">*Max 8</span>
							<p class="help-block"></p>
						</div>
					</div>

					<button type="submit" name="submit" class="btn btn-primary">Register</button>
					<button type="reset" name="reset" class="btn btn-danger">Clear</button>


				</fieldset>
			</form>
		</div>
	</div>
</div>
