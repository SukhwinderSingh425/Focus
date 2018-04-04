<?php
session_start();
include_once("vars.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Find Doctor</title>
<?php
	include_once("extfiles.php");
?>

</script>
</head>
<body>
	
<?php
		include_once("header.php");
?>
	
	<div class="find" id="find">
		<div class="container">
			<h3 class="title">Find Doctor</h3>

			<div class="clearfix"> </div>
			
			
			<div class="Login-form">
				<form  method="POST" action="" class="form-inline">
					<b>Specialist</b>
					
										<select class='form-control' name="spec" required>
										<option selected>-- Select a Speciality--</option>
										
										
					<?php


									$conn=mysqli_connect($host,$un,$pwd,$db);
									if(!$conn)
									{
										die("error in connection".mysqli_connect_error());
									}
									else 
									{
										
										$sql="SELECT DISTINCT speciality from doctor ";
										$result=mysqli_query($conn,$sql);
										while($z=mysqli_fetch_array($result))
										{	
											echo"<option value=$z[speciality]>$z[speciality]</option>";
										}
										echo "</select>";
										if(!isset($_POST['go']))
										{
										echo '<input type="submit" class="btn btn-primary" type="button" name="go" value="Go!"></form>';
										}
									}
								?>


<?php
if(isset($_POST['go']))
{
	$speciality=$_POST['spec'];
	
?>
	<form  method="POST" action="" class="form-inline">
					<b>Hospital</b>
					
										<select class='form-control' name="hosp" required>
										<option selected>-- Select a Hospital--</option>
										
										
					<?php


									$conn=mysqli_connect($host,$un,$pwd,$db);
									if(!$conn)
									{
										die("error in connection".mysqli_connect_error());
									}
									else 
									{
										
										$sql="SELECT DISTINCT hospital.name from hospital,doctor where doctor.speciality='$speciality' AND doctor.hid=hospital.id";
if($result=mysqli_query($conn,$sql))
{
while($z=mysqli_fetch_array($result))
{ 
echo"<option value=$z[name]>$z[name]</option>";
}
if(!isset($_POST['sub']))
										{
										echo '<input type="submit" class="btn btn-primary" type="button" name="sub" value="Go!">';
										}
echo "</select></form>";
}
else
{
	echo mysqli_error($conn);
}
}

?>
<?php
if(isset($_POST['sub']))
{
$hospital=$_POST['hosp'];
	
	if(!$conn)
	{
		die("error in connection".mysqli_connect_error());
	}
	else 
			{
				$sql="SELECT doctor.doctor_name,doctor.photo FROM doctor,hospital where doctor.speciality='$speciality' AND hospital.hospital_name='$hospital' AND doctor.hospital_id=hospital.id";
				if($result=mysqli_query($conn,$sql))
				{
					while($z=mysqli_fetch_array($result))
					{	
	echo '<a href="viewdoc.php"><div class="img-responsive"><img src="data:image/jpeg;base64,'.base64_encode($z['photo']).'" height=200 width=250 class="img-rounded">';
	echo "<div class='caption center-block'><p>$z[name]</p></a></img></div></div>";
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
?>

</div>

</body>
</html>