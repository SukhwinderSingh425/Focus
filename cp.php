<?php
session_start();
include_once("vars.php");

if(isset($_SESSION["name"]))
{
	$ut=$_SESSION['ut'];
	$email=$_SESSION['email'];
if($ut=='admin')
	{
	
		if(isset($_POST["submit"]))
		{
			
			$cp=md5($_POST["currentpassword"]);
			$np=md5($_POST["password"]);
			$cnp=md5($_POST["cpassword"]);
			if($np==$cnp)
			{
				$conn=mysqli_connect($host,$un,$pwd,$db);
				
				if(!$conn)
				{
					die("error in connection".mysqli_connect_error());
				}
				else 
				{
					$sql="update admin SET password='$np' WHERE email='$email' AND password='$cp'";
					if(mysqli_query($conn,$sql))
					{
					$cnt=mysqli_affected_rows($conn);
						if($cnt==1)
						{
							$msg="<h2><center>Password Changed Successfully</h2>";
						}
						else
						{
							
							$msg="<h2>No rows effected</h2>" . mysqli_error($conn);
							
						}
					}
					else
					{
						$msg="<h2><center>Username/Password Incorrect. Please try Again... !!";
					}
				}
					
					mysqli_close($conn);
			}
			else
			{
				$msg="New Password Does Not Match";
			}
		}
	}
	else if($ut=='user')
	{
	
		if(isset($_POST["submit"]))
		{
			
			$cp=md5($_POST["currentpassword"]);
			$np=md5($_POST["password"]);
			$cnp=md5($_POST["cpassword"]);
			if($np==$cnp)
			{
				$conn=mysqli_connect($host,$un,$pwd,$db);
				
				if(!$conn)
				{
					die("error in connection".mysqli_connect_error());
				}
				else 
				{
					$sql="update user SET password='$np' WHERE email='$email' AND password='$cp'";
					if(mysqli_query($conn,$sql))
					{
					$cnt=mysqli_affected_rows($conn);
						if($cnt==1)
						{
							$msg="<h2><center>Password Changed Successfully</h2>";
						}
						else
						{
							
							$msg="<h2>No rows effected</h2>" . mysqli_error($conn);
							
						}
					}
					else
					{
						$msg="<h2><center>Username/Password Incorrect. Please try Again... !!";
					}
				}
					
					mysqli_close($conn);
			}
			else
			{
				$msg="New Password Does Not Match";
			}
		}
	}
	else if($ut=='doctor')
	{
	
		if(isset($_POST["submit"]))
		{
			
			$cp=md5($_POST["currentpassword"]);
			$np=md5($_POST["password"]);
			$cnp=md5($_POST["cpassword"]);
			if($np==$cnp)
			{
				$conn=mysqli_connect($host,$un,$pwd,$db);
				
				if(!$conn)
				{
					die("error in connection".mysqli_connect_error());
				}
				else 
				{
					$sql="update doctor SET password='$np' WHERE email='$email' AND password='$cp'";
					if(mysqli_query($conn,$sql))
					{
					$cnt=mysqli_affected_rows($conn);
						if($cnt==1)
						{
							$msg="<h2><center>Password Changed Successfully</h2>";
						}
						else
						{
							
							$msg="<h2>No rows effected</h2>" . mysqli_error($conn);
							
						}
					}
					else
					{
						$msg="<h2><center>Username/Password Incorrect. Please try Again... !!";
					}
				}
					
					mysqli_close($conn);
			}
			else
			{
				$msg="New Password Does Not Match";
			}
		}
	}
	else  
		

		?>
	<html>
	<head>
	<title>Change Password</title>
	<?php
	include_once("extfiles.php");
	?>
	<script>
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
	if(isset($_SESSION["name"]))
	{
		include_once("header.php");	
		}
	
	?>
	

	
	
					
			<div class="signup" id="signup">
				<div class="container">
					<h3 class='title'>Sign Up</h3>
				</br>
						<form class='form-horizontal form-responsive' name='cp' method='POST' onsubmit='return passCompare()'>
						
							
							
								<div class='form-group'>
								<label for='password' class='col-sm-2 control-label'>CurrentPassword</label>
								<div class='col-sm-8'>
									<input type='password' autofocus class='form-control' id='currentpassword' placeholder='Enter Password....' name='currentpassword' minlength=''>
								</div>
							</div>
				<div class='form-group'>
								<label for='password' class='col-sm-2 control-label'>New Password</label>
								<div class='col-sm-8'>
									<input type='password' class='form-control' id='password' placeholder='Enter Password....' name='password' minlength=''>
								</div>
							</div>
						
							
							
							<div class='form-group'>
								<label for='cpassword' class='col-sm-2 control-label'>Confirm New Password</label>
								<div class='col-sm-8'>
									<input type='password' id='cpassword' name='cpassword' onchange='cpm();' class='form-control' placeholder='Confirm Password....' name='cpassword'>
									
								</div>
							</div>
							<div
							id='pwd'>
							</div>
							<br/>
							<div class='contact-right text-center'>

									<input type='submit' class='btn-primary btn-lg' id='submit' name='submit' value='Change Password'/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
									<input type='reset' id='reset' name='reset' value="Cancel" class='btn-primary btn-lg'>
							</div>
							</form>
								</div>
								
								</div>
								<br/><br/><br/><br/>
								<?php
								
								if(isset($msg))
								{
									echo $msg;
								}
								?>
								<br/><br/><br/><br/>
								
			
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