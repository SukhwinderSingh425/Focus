<?php
session_start();
$ut=$_SESSION['ut'];
if($ut=='admin')
{
include_once("vars.php");
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$city=$_POST['city'];
	$pc=$_POST["pc"];
	$contact=$_POST["contact"];
	$address=$_POST["address"];
	$email=$_POST["email"];

		$conn=mysqli_connect($host,$un,$pwd,$db);
		
		if(!$conn)
		{
			$connerror=die(mysqli_connect_error() . " Error Occured. Try Again");
		}
		else 
		{
		$sql="insert into hospital(name,city,pincode,contact,address,email)
				values('$name','$city',$pc,$contact,'$address','$email')";
		}
	if(mysqli_query($conn,$sql))
		{
			$msg="<h1><center>Success..!! A new Hospital Added.</h1> ";
			
		}	
		else
		{
			$sqlerror=mysqli_connect_error();
		$count=mysqli_affected_rows($conn);
		mysqli_close($conn);
		}
	
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign Up</title>
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
<?php
if(!isset($_POST["submit"]))
{
echo "
<h3 class='title'>Add Hospital</h3>
</br></br>
	<form class='form-horizontal form-responsive' name='form1' method='post'>
							<div class='form-group'>
								<label for='focusedinput' class='col-sm-2 control-label'>Name</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='name' placeholder='Enter Name....' name='name'  onkeydown='return isChar(event)' required>
								</div>
								
							</div>
							
							<div class='form-group'>
								<label for='focusedinput' class='col-sm-2 control-label'>City</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='city' placeholder='Enter City....' name='city'  onkeydown='return isChar(event)' required>
								</div>
								
							</div>
							
							
							
							<div class='form-group'>
								<label for='age' class='col-sm-2 control-label'>Pin Code</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='pc' placeholder='Enter Pin Code...' name='pc'  onkeydown='return isNumber(event)'required>
								</div>
							</div>
							<div class='form-group'>
								<label for='contact' class='col-sm-2 control-label'>Contact No</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='contact' placeholder='Enter Phone Number without country code....' name='contact' minlength='10' maxlength='10' onkeydown='return isNumber(event)' required>
								</div>
								
							</div>
							<div class='form-group'>
								<label for='address' class='col-sm-2 control-label'>Address</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='address' placeholder='Enter Address Location  ....' name='address' required>
								</div>
								
							</div>
							<div class='form-group'>
								<label for='email' class='col-sm-2 control-label label-input-sm'>E-mail</label>
								<div class='col-sm-8'>
									<input type='email' class='form-control input-sm' name='email' id='email' placeholder='Enter Email....' required>
								</div>
							</div>
							
							
							<br/>
							<div class='contact-right text-center'>

									<input type='submit' class='btn-block btn-primary btn-lg' id='submit' name='submit' value='Add Hospital'/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<input type='reset' id='reset' name='reset' class='btn-block btn-primary btn-lg'>
							</div>
							</form>
							";
}
							else
								
								{
									if(isset($msg))
									{
									echo $msg;
									}
								}
								?>
							<br/>
							<br/>
							<?php
							
							if(isset($connerror))
							{
								print "<center><h3>$connerror</h3><center>";
							}
							if(isset($sqlerror))
							{
								print "<center><h3>$sqlerror</h3><center>";
							}
							?>
							<br/>
							<br/>
<?php
include_once("footer.php");
}
else
	{
			header("location:error.php");
	}
?>
</body>
</html>
	
	
	
	
	
	