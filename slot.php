<?php
include('dbcon.php');
?>
<?php
	$error="";
	$msg="";
	if(isset($_POST['slot']))
		{
			/* echo "hello";
			die(); */
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
			$query="INSERT INTO `tbl_members` (`fname`, `lname`, `email`, `phone`, `address`) VALUES ('$fname', '$lname', '$email', '$phone', '$address')";
			/* echo $query;
			die(); */
			$result=mysqli_query($con,$query);
			if($result)
				{
					header("location:slot.php");
				}
			else
				{
					$error="Registration Failed!";
				}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>HARF Laundry</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Book Your HARF Laundry
				</span>
				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
					<input class="input100" type="text" name="lname" required title="Please Enter Last Name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" required title="Valid Email ID" placeholder="Eg. example@email.com">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="phone">Enter phone number *</label>
				<div class="wrap-input100 validate-input" data-validate = "Valid phone is required: 0123456789">
					<input id="phone" class="input100" type="text" name="phone" pattern="[0-9]{10}" required title="10 digit phone number" placeholder="Eg. 98123 45670">
					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="address">Provide your address *</label>
				<div class="wrap-input100 validate-input" data-validate = "Address is required">
					<textarea id="address" class="input100" name="address" required title="Please Provide Your Address" placeholder="Full Address for Pick Up"></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<input id="btn-slot" type="submit" class="contact100-form-btn" name="slot" value="Book Pick Up">
					</button>
				</div>
			</form>
			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-02.png');">
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
