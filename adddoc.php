<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
	<title>Add Doctor</title>
<?php
	include_once("extfiles.php");
?>
<script type="text/javascript">
 function isNumber(evt)
{
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (( charCode > 47 && charCode < 58 ) || ( charCode > 36 && charCode < 41 ) || (charCode==08 ||charCode==127 )){
return true;}

return false;
}      
        
function isChar(evt)
{
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (( charCode > 64 && charCode < 91 ) || ( charCode > 36 && charCode < 41 ) || (charCode < 123 && charCode > 96) || (charCode==08 ||charCode==127 ||charCode==32)){
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
include("vars.php");
if(isset($_POST["submit"])){
	$name=$_POST['name'];
	$education=$_POST['education'];
	$experience=$_POST['experience'];
	$biography=$_POST['biography'];
	$membership=$_POST['membership'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$speciality=$_POST['specialist'];
	$hid=$_POST['hospital'];
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $photo = addslashes(file_get_contents($image));

		$conn=mysqli_connect($host,$un,$pwd,$db);
	if(!$conn)
	{
		die("error in connection".mysqli_connect_error());
	}
	else 
	{
        $dataTime = date("Y-m-d H:i:s");
        
     $sql="insert into doctor (name,education,experience,biography,membership,contact,email,password,speciality,photo,hid)
	 values('$name','$education','$experience','$biography','$membership','$contact','$email','$password','$speciality','$photo','$hid');";
       // $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', '$dataTime')");
        
		if(mysqli_query($conn,$sql)){
            echo "Data added successfully";
        }else{
            echo mysqli_error($conn)."please try again.";
        } 
    }
}
}
?>
<div class="adddoctor" id="adddoctor">
		<div class="container">
		<h3 class='title'>Add Doctor</h3>
</br>
		<form class='form-horizontal form-responsive' name='adddoctorform' method='POST' enctype="multipart/form-data">
							<div class='form-group'>
								<label for='name' class='col-sm-2 control-label'>Name</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control' id='name' placeholder='Enter Name....' name='name'  onkeydown='return isChar(event)'>
								</div>
							</div>
							
							
							<div class='form-group'>
								<label for='education' class='col-sm-2 control-label '>Education</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control ' id='education' placeholder='Enter education & qualification' name='education'  onkeydown='return isChar(event)'>
								</div>
							</div>
							
							<div class='form-group'>
								<label for='experience' class='col-sm-2 control-label '>Experience</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control ' id='experience' placeholder='Enter Experience' name='experience'  onkeydown='return isNumber(event)'>
								</div>
							</div>
							<div class='form-group'>
								<label for='biography' class='col-sm-2 control-label '>Biography</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control ' id='biography' placeholder='Enter Biography' name='biography'  >
								</div>
							</div>
							
							<div class='form-group'>
								<label for='membership' class='col-sm-2 control-label '>Membership</label>
								<div class='col-sm-8'>
									<input type='text' class='form-control ' id='membership' placeholder='Enter Membership' name='membership'  >
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
								<label for='password' class='col-sm-2 control-label'>Password</label>
								<div class='col-sm-8'>
									<input type='password' class='form-control' id='password' placeholder='Enter Password....' name='password' minlength='8'>
								</div>
							</div>
						
						
						<div class='form-group'>
								<label for='specialist' class='col-sm-2 control-label'>Specialist</label>
								<div class='col-sm-8'>
										<select class='form-control' name="specialist" required>
											<option selected>-- Select a specialist--</option>
											<option value="dentist">Dentist</option>
											<option value="dermitologist">Dermitologist</option>
											<option value="allergyimmunology">Allergy and Immunology</option>
											<option value="anatomic">Anatomic/Clinical Pathology</option>
											<option value="anesthesiology">Anesthesiology</option>
											<option value="cardiology">Cardiology</option>
											<option value="psychiatry">Psychiatry</option>
											<option value="colonsurgery">Colon and Rectal Surgery</option>

											<option value="dermatology">Dermatology</option>

											<option value="radiology">Diagnostic Radiology</option>
											<option value="endocrinology">Endocrinology</option>
<option value="infectious disease">Infectious Disease</option>
<option value="nephrology">Nephrology</option>
<option value="neurology">Neurology</option>
<option value="obstetrics">Obstetrics and Gynecology</option>
<option value="pulmonary">Pulmonary Disease</option>

										</select>
										</div>
										</div>
										
										<div class='form-group'>
								<label for='hospital' class='col-sm-2 control-label'>Hospital</label>
								<div class='col-sm-8'>
										<select class='form-control' name="hospital" required>
											
											<option selected>-- Select a hospital--</option>
											<option value="1111">IVY Nawashahr</option>
											<option value="1112">IVY Hoshiarpur</option>
										</select>
										</div>
										</div>
										<div class='form-group'>
								<label for='name' class='col-sm-2 control-label'>Select image to upload:</label>
								<div class='col-sm-8'>		
        <input type="file" name="image"/>
		</div>
		</div>
										
<div class='contact-right text-center'>

<input type='submit' class='btn-block btn-primary btn-lg' id='submit' name='submit' value='sign up'/> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<input type='reset' id='reset' name='reset' class='btn-block btn-primary btn-lg'>
</div>




<?php
	include_once("footer.php");
?>

</body>
</html>