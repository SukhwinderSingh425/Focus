<?php
session_start();
if(!isset($_SESSION['name']))
{
include_once("vars.php");
?>
<?php
if(isset($_POST["submit"]))
{
	$id=$_POST["id"];
	$password=md5($_POST["pass"]);
	$conn=mysqli_connect($host,$un,$pwd,$db);
	if(!$conn)
	{
		die("error in connection".mysqli_connect_error());
		mysqli_close($conn);
	}
	else 
	{
		$cd=strlen($id);
		if($cd==2)
		{
			$sql="SELECT * FROM admin WHERE id=$id AND password='$password'";
				if($q=mysqli_query($conn,$sql))
				{
					$result=mysqli_fetch_array($q);
					if($password==$result['password'])
						{
							$_SESSION["id"]=$result['id'];
							$_SESSION["name"]=$result['name'];
							$_SESSION["email"]=$result['email'];
							$_SESSION['ut']='admin';
							header("location:index.php");
						}
				}
				else
					echo mysqli_error($conn);
		}
		else if($cd==3)
		{
			$sql="SELECT * FROM doctor WHERE doctor_id=$id AND password='$password'";
				if($q=mysqli_query($conn,$sql))
				{
					$result=mysqli_fetch_array($q);
					if($password==$result['password'])
						{
							$_SESSION["id"]=$result['id'];
							$_SESSION["name"]=$result['name'];
							$_SESSION["email"]=$result['email'];
							$_SESSION['ut']='doctor';
							header("location:index.php");
						}
				}
		}
		else if($cd==5)
			{
				$sql="SELECT * FROM user WHERE id=$id AND password='$password'";
					if($q=mysqli_query($conn,$sql))
					{
						$result=mysqli_fetch_array($q);
						if($password==$result['password'])
							{
								$_SESSION["id"]=$result['id'];
								$_SESSION["name"]=$result['name'];
								$_SESSION["email"]=$result['email'];
								$_SESSION['ut']='user';
								header("location:index.php");
							}
					}
					else
						echo mysqli_error($conn);
			}
			else
		{
			$msg="<h1></center>Enter a Valid ID / Password</center></h1>";
		}
	}				
		
		
	}


?>















<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
<?php
	include_once("extfiles.php");
?>
</head>
<body>
	
<?php
		include_once("header.php");
	
?>
	
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title">Login Form</h3>

			<div class="clearfix"> </div>
			<form class='form-horizontal form-responsive' name='login' method='post'>
				<div class='form-group'>
					<label for='email' class='col-sm-2 control-label label-input-sm'>User ID</label>
					<div class='col-sm-8'>
						<input type='text' class='form-control input-sm' name='id' id='id' placeholder='Enter the Account ID....' required autofocus/>
					</div>
				</div>

				<div class='form-group'>
					<label for='password' class='col-sm-2 control-label'>Password</label>
					<div class='col-sm-8'>
						<input type='password' class='form-control' id='pass' placeholder='Enter Password....' name='pass' required>
					</div>
				</div><center>
				<input type='submit' class='btn-primary btn-lg' id='submit' name='submit' value='Sign In'/> 
				
			</form>
		<?php
		
		if(isset($msg))
		{
			echo $msg;
		}
		?>
			

		</div>
			<center>
		<br/><br/>
			<h3> New User</h3>
			<h4><p><a href="signup.php">Signup</a> (Or) <a href="index.php">Navigate as a Visitor</a></p></h4><br/><br/>
		</center>

	</div>
	
	
<?php
	include_once("footer.php");
	//juic.ac.in
}else
	header("location:index.php");

?>
</body>
</html>



