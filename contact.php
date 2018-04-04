<?php
session_start();
include_once("vars.php");
?>









<?php
require_once("vars.php");
if(isset($_POST["submit"]))
{
	$fn=$_POST["fn"];
	$ln=$_POST["ln"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$message=$_POST["message"];
	$conn=mysqli_connect($host,$un,$pwd,$db);
	if(!$conn)
	{
		die("error in connection".mysqli_connect_error());
	}
	else 
	{
		$sql="insert into contact (firstname,lastname,email,contact,message) values('$fn','$ln','$email',$phone,'$message')";
		if($result=mysqli_query($conn,$sql))
		{
			$count=mysqli_affected_rows($conn);
			if($count==0)
			{
				$msg="An Error Occured. Please Try Again Later";
			}
			else
			{
				
				header("location:contact.php?id=1");
			}
			
		}	
		else
		{
			$sqlerror=mysqli_connect_error();
		
		mysqli_close($conn);
		}
	}
	
}



?>



<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Contact Us</title>
<?php
	include_once("extfiles.php");
?>
<script type="text/javascript">
 function isNumber(evt)
{
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (( charCode > 47 && charCode < 58 ) || ( charCode > 36 && charCode < 41 ) || (charCode==08 ||charCode==127 ||charCode==9)){
return true;}

return false;
}      
        
function isChar(evt)
{
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (( charCode > 64 && charCode < 91 ) || ( charCode > 36 && charCode < 41 ) || (charCode < 123 && charCode > 96) || (charCode==08 ||charCode==127 ||charCode==9)){
return true;}

return false;
}

</script>
</head>

<body>
	
<?php
		include_once("header.php");
	?>
<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title">CONTACT US</h3>

			<div class=" col-md-7 contact-address">
				<h4>Contact Address</h4>
				
				<div class="contact-left">
				<div class="row">
					<div class="col-sm-4 col-lg-4 col-sm-4">
					<div class="address-contact-left ">
						<h5>Address:</h5>
						<p><span class="fa fa-home"></span> 333 Broome St New York, NY 10002, </p>
					</div>
					</div>
					<div class="col-sm-4 col-lg-4 col-sm-4">
					<div class="address-contact-left ">
						<h5>Phones:</h5>
						<p><span class="fa fa-phone"></span> +9900887766</p>
						<p><span class="fa fa-phone"></span> +11 222 333</p>
					</div>
					</div>
					<div class="col-sm-4 col-lg-4 col-sm-4">
					<div class="address-contact-left ">
						<h5>Email:</h5>
						<p><span class="fa fa-envelope"></span> <a href="mailto:info@example.com">mail@example.com</a></p>
					</div>
					</div>
					</div>
				</div>
			</div>
			<?php
			if(isset($_GET["id"]))
			{
				$id=$_GET["id"];
				if($id==1)
				{
					$msg='<h1>The Message has Been Submitted Successfully.</h1>';
					echo $msg;
				}
			}
			?>

			<div class="clearfix"> </div>
			<div class="contact-form">
				<form action="" method="POST">
					<div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
						<input type="text" name="fn" placeholder="First Name..." required minlength="4" maxlength="50" onkeydown="return isChar(event)">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right ">
						<input type="text" name="ln" placeholder="Last Name" onkeydown="return isChar(event)" required>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
						<input type="email" name="email" placeholder="Email" required autocomplete>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right ">
						<input type="text" onkeydown="return isNumber(event)" name="phone"  placeholder="Phone No" required maxlength="10">
					</div>
					<textarea name="message" placeholder="Enter Your Message/Query Here" required></textarea>
					
						<div class="clearfix"> </div>
					
					<input type="submit" name="submit" value="SUBMIT">
				</form>
		
			</div>

		</div>
	</div>
	<!--//contact-->
		<?php
		include_once("footer.php");
	?>
	</body>
	</html>