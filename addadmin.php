<?php
session_start();
$ut=$_SESSION['ut'];
if($ut=='admin')
{
	
include_once("vars.php");

if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
	$age=$_POST["age"];
	if(isset($_POST["gender"]))
	{
		$gender=$_POST["gender"];
	}
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	$cpass=$_POST["cpass"];
	$address=$_POST["address"];
	$contact=$_POST["contact"];
	
	$fpass=md5("$pass");
	
	if($pass==$cpass)
	{
		$conn=mysqli_connect($host,$un,$pwd,$db);
		
		if(!$conn)
		{
			$connerror=die(mysqli_connect_error() . " Error Occured. Try Again");
		}
		else 
		{
		$sql="insert into admin(name,gender,age,contact,address,email,password)
				values('$name','$gender',$age,$contact,'$address','$email','$fpass')";
		}
	if(mysqli_query($conn,$sql))
		{
			$msg="<h1>Success..!! A new Admin Added.</h1> ";
			
		}	
		else
		{
			$sqlerror=mysqli_connect_error();
		$count=mysqli_affected_rows($conn);
		mysqli_close($conn);
		}
	}
	else
	{
		$msg="Error... Passwords do not match";
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
function cpm() {
    var password = $("#pass").val();
    var confirmPassword = $("#cpass").val();

    if (password != confirmPassword)
        $("#pwd").html("<center><h1>Passwords do not match!");
    else
        $("#pwd").html("<center><h1>Passwords match.");
}

$(document).ready(function () {
   $("#cpass").keyup(cpm);
});
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
<h3 class='title'>Sign Up</h3>
</br></br>
	<form class='form-horizontal form-responsive' name='form1' method='post' onsubmit='return passcompare()'>
							<div class='form-group'>
								<label for='focusedinput' class='col-sm-2 control-label'>Name</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='name' placeholder='Enter Name....' name='name'  onkeydown='return isChar(event)' required>
								</div>
								
							</div>
							
							<div class='form-group'>
								<label for='gender' class='col-sm-2 control-label'>Gender</label>
								<div class='col-sm-8'>
									<div class='radio block'><label><input type='radio' name='gender' value='male'required>Male</label></div>  
									<div class='radio block'><label><input type='radio' name='gender' value='female' required>Female</label></div>
									</label></div>
								</div>
							</div>
							
							<div class='form-group'>
								<label for='age' class='col-sm-2 control-label'>Age</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='age' placeholder='Enter Age...' name='age'  onkeydown='return isNumber(event)'required>
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
									<input type='text' class='form-control' id='address' placeholder='Enter Address....' name='address' required>
								</div>
								
							</div>
							<div class='form-group'>
								<label for='email' class='col-sm-2 control-label label-input-sm'>E-mail</label>
								<div class='col-sm-8'>
									<input type='email' class='form-control input-sm' name='email' id='email' placeholder='Enter Email....' required>
								</div>
							</div>
							
							<div class='form-group'>
								<label for='password' class='col-sm-2 control-label'>Password</label>
								<div class='col-sm-8'>
									<input type='password' class='form-control' id='pass' placeholder='Enter Password....' name='pass' required>
								</div>
							</div>
						
							
							
							<div class='form-group'>
								<label for='cpassword' class='col-sm-2 control-label'>Confirm Password</label>
								<div class='col-sm-8'>
									<input type='password' id='cpass' onchange='cpm();' class='form-control' placeholder='Confirm Password....' name='cpass' required>
								</div>
							</div>
							<div id='pwd'>
							</div>
							<br/>
							<div class='contact-right text-center'>

									<input type='submit' class='btn-block btn-primary btn-lg' id='submit' name='submit' value='Sign Up'/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
	
	
	
	
	
	