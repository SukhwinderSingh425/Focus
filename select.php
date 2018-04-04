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
<select class='form-control' name="spec" id="spec" required>
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
if($result=mysqli_query($conn,$sql))
{
while($z=mysqli_fetch_array($result))
{ 
echo "<option value=$z[speciality]>$z[speciality]</option>";
}
echo "</select>";

}
else{
	echo mysqli_error($conn);
}
}

?>


<select class='form-control' name="hospital" required>
<option selected>-- Select Hospital--</option>
<?php
echo $speciality;
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
echo "</select>";
}
else
{
	echo mysqli_error($conn);
}
}

?>
<?php
$speciality="dermitologist";
$hospital="IVY NAWASHAHR";
	
	if(!$conn)
	{
		die("error in connection".mysqli_connect_error());
	}
	else 
			{
				$sql="SELECT doctor.name,doctor.photo FROM doctor,hospital where doctor.speciality='$speciality' AND hospital.name='$hospital' AND doctor.hid=hospital.id";
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
		
?>		

<?php
include_once("footer.php");
?>


</body>
</html>