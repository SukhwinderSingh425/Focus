<?php
session_start();
if(!isset($_SESSION['name']))
{
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
<?php
	include_once("extfiles.php");
?>
<script type="text/javascript">
 function isNumber(evt)
{
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (( charCode > 47 && charCode < 58 ) || ( charCode > 36 && charCode < 41 ) || (charCode==08 ||charCode==127)){
return true;}

return false;
}      
        
function isChar(evt)
{
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (( charCode > 64 && charCode < 91 ) || ( charCode > 36 && charCode < 41 ) || (charCode < 123 && charCode > 96) || (charCode==08 ||charCode==127)){
return true;}

return false;
}

  function cpm() {
    var password = $("#password").val();
    var confirmPassword = $("#cpassword").val();

    if (password != confirmPassword)
        $("#pwd").html("<center><h1>Password do not match!");
    else
        $("#pwd").html("<center><h1>Password match.");
}

$(document).ready(function () {
   $("#cpassword").onkeyup(cpm);
});          
          
    
</script>
</head>
<body>
	
<?php
		include_once("header.php");
?>
	
	<div class="signup" id="signup">
		<div class="container">
		<h3 class='title'>Sign Up</h3>
</br>
		<form class='form-horizontal form-responsive' name='signupform' method='POST' onsubmit='return passCompare()'>
							<div class='form-group'>
								<label for='name' class='col-sm-2 control-label'>Name</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='name' placeholder='Enter Name....' name='name'  onkeydown='return isChar(event)'>
								</div>
							</div>
							<div class='form-group'>
								<label for='gender' class='col-sm-2 control-label'>Gender</label>
								<div class='col-sm-8'>
									<div class='radio block'><label><input type='radio' name='gender' value='male'>Male</label></div>  
									<div class='radio block'><label><input type='radio' name='gender' value='female'>Female</label></div>
								</div>
								</div>
							
							
							<div class='form-group'>
								<label for='age' class='col-sm-2 control-label '>Age</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control ' id='age' placeholder='Enter Age...' name='age'  onkeydown='return isNumber(event)' maxlength='2'>
								</div>
							</div>
							
							<div class="form-group">
							<label for="email" class="col-sm-2 control-label"> Email</label>
							<div class="col-sm-8">
							<input type="text" name="email" placeholder='Enter Email....' autocomplete class="form-control">
							</div>
							</div>
							<div class='form-group'>
								<label for='contact' class='col-sm-2 control-label'>Contact No</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='contact' placeholder='Enter Phone Number' name='contact' minlength='10' maxlength='10' onkeydown='return isNumber(event)'>
								</div>
								
							</div>
							<div class='form-group'>
								<label for='address' class='col-sm-2 control-label'>Address</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='address' placeholder='Enter Address....' name='address'>
								</div>
								
							</div>
							
							
							<div class='form-group'>
								<label for='password' class='col-sm-2 control-label'>Password</label>
								<div class='col-sm-8'>
									<input type='password' class='form-control' id='password' placeholder='Enter Password....' name='password' minlength='8'>
								</div>
							</div>
						
							
							
							<div class='form-group'>
								<label for='cpassword' class='col-sm-2 control-label'>Confirm Password</label>
								<div class='col-sm-8'>
									<input type='password' id='cpassword' name='cpassword' onchange='cpm();' class='form-control' placeholder='Confirm Password....' name='cpassword'>
									
								</div>
							</div>
							<div id='pwd'>
							</div>
							<br/>
							<div class='contact-right text-center'>

									<input type='submit' class='btn-block btn-primary btn-lg' id='submit' name='submit' value='sign up'/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<input type='reset' id='reset' name='reset' class='btn-block btn-primary btn-lg'>
							</div>
							</form>
<?php
	if(isset($_POST["submit"]))
		{
			$name=$_POST["name"];
			$age=$_POST["age"];
			if(isset($_POST["gender"]))
			$gender=$_POST["gender"];
			$email=$_POST["email"];
			$contact=$_POST["contact"];
			$address=$_POST["address"];
			$password=md5($_POST["password"]);
			$cpassword=md5($_POST["cpassword"]);
			$code=md5(rand(0,1000));
			$msg = 'Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
			$conn=mysqli_connect("localhost","root","","ams");
		if(!$conn)
		{
			$connerror=die(mysqli_connect_error() . " Error Occured. Try Again");
		}
		else
		{
		$sql="insert into user (name,gender,age,email,contact,address,password,code)
				values('$name','$gender','$age','$email','$contact','$address','$password','$code')";
		if(mysqli_query($conn,$sql))
		{
			//header("location:mail.php");
			$to = $email;
			$id = mysqli_insert_id($conn);
			
require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "ps482109@gmail.com";
$mail->FromName = "Parminder singh";

//To address and name
$mail->addAddress("$to"); //Recipient name is optional

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Signup | Verification";
$mail->Body = "<i>Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: '.$name.'
Id: '.$id.'
Password: '.$password.'
------------------------
 
Please click this link to activate your account:
http://localhost/verify.php?email='.$email.'&code='.$code.' ';</i>";
$mail->AltBody = "Thanks for signing up!";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}
		}
		else
		{
			echo mysqli_error($conn);
		}
		}
		mysqli_close($conn);
		}
		

?>
</div>
</div>
<?php
	include_once("footer.php");
}
else
{
	header("location:");
}
?>

</body>
</html>