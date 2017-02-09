<!DOCTYPE html>
<html lang="en">



<?php include("config.php"); ?>


<?php
	if(isset($_POST['save']))
	{
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mname = $_POST['mname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$resume	= $_POST['resume'];
		$sql = "INSERT INTO tbl_applicant (lastname, firstname, middlename,phone,email,resume) VALUES ('$fname', '$lname', '$mname','$email','$phone','$resume')";
		if($conn->query($sql) == true)
		{
			
			
			echo"<script LANGUAGE='JavaScript' > 
			
			 window.alert('Succesfully Saved')
			
			
			window.location.href='http://innovatemktg.com';
			</script>";
		
			
		
		}
	}
	?>

    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Innovate Strategic Resource Marketing Inc. - Registration System</title>
	</head>
	<body>
	
	
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	
		<div class="container">
			<div class="row main ">
				<center><div class="main-login pull-left main-center col-lg-6 ">
				<center><img src ="http://innovatemktg.com/wp-content/uploads/2015/07/innov-logo-transparent-white.png" class="img-responsive ">
				<h1>Sign up to our Application</h1></center>
				<br>
					<form  method="post">
						
						<div class="form-group">
							<label for="fname" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">	
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter your First Name" required/>
								</div>
							</div>
						</div>
							<div class="form-group">
							<label for="mname" class="cols-sm-2 control-label">Middle Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mname" id="mname"  placeholder="Enter your Middle Name" required/>
								</div>
							</div>
						</div>

							<div class="form-group">
							<label for="lname" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter your Last Name" required/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" required/>
								</div>
							</div>
						</div>

						

						<div class="form-group">
							<label for="phone" class="cols-sm-2 control-label">Phone Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone fa-lg" aria-hidden="true"></i></span>
									<input type="phone" class="form-control" name="phone" id="phone"  placeholder="Enter your Phone Number" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Upload Resume </label>
							<div class="cols-sm-10">
								<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-upload fa-lg" aria-hidden="true" ></i></span>
									<input type="text" class="form-control " id="user_img" name="resume" >
								<button type="button" class="form-control" id="upload_butt" >Upload Resume</button>
								</div>
							</div>
						</div>

						<div class="form-group ">
						<br>
								<input type="submit" value="Register" class="btn btn-success btn-lg btn-block login-button" name="save">
								
									
									
						</div>
						
					</form>
					
								<form id="upload_form" enctype="multipart/form-data" method="post" class="hidden">
														
									<input type="file" class="form-control hidden" id="imgFile"  onchange="CopyMe(this, 'user_img');" >
									
									
								
									
									<button type="button" class="form-control" id="upload_butt" >Upload Resume</button>
								</form>
								
						
				</div></center>
			<br>	<br>
				<div class="col-md-6 ">
				
					<center><div class="form-group">
				
						<div class="fb-page" data-href="https://www.facebook.com/innovmktg/" data-tabs="timeline,events,messages" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/innovmktg/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/innovmktg/">Innovate Resource Marketing</a></blockquote></div>
					</div></center>
				</div>
			
			
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
					<script src="image.js"></script>
				<!-- Include all compiled plugins (below), or include individual files as needed -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>