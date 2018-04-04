<!DOCTYPE html>
<html>
<head>
	<title>Availability</title>
<?php
	include_once("extfiles.php");
?>
</head>
<body>
	
<?php
		include_once("header.php");
?>
	
	<div class="viewdoc" id="viewdoc">
		<div class="container-fluid">
		<?php
include("vars.php");
if(!$conn)
{
die("error in connection".mysqli_connect_error());
}
else 
{
//$name=$_POST['name'];
$name='Nitin Mittal';
$sql="SELECT * from doctor where doctor.name='$name'";
if($result=mysqli_query($conn,$sql))
{
while($z=mysqli_fetch_array($result))
{ 
echo "<center><h2>Dr. $z[name]</h2></center><br>";
echo '<div class="col-sm-4 col-lg-4"><div class="image-responsive"><img src="data:image/jpeg;base64,'.base64_encode($z['photo']).'" height=200 width=250 class="img-polaroid"/></div></div>';
echo "<div class='col-sm-8 col-lg-8'>";
echo "<h4>Biography</h4><br> <p>$z[biography]</p><br>";
echo "<h4>Education and Trainings</h4><br> <p>$z[education]</p><br>";
echo "<h4>Experience</h4><br> <p>$z[experience] years</p><br>";
echo "<h4>Membership</h4><br> <p>$z[membership]</p><br></div>";
}
}
else{
	echo mysqli_error($conn);
}
}

?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php
	include_once("footer.php");
?>
</center>

</body>
</html>