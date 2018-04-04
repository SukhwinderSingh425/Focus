<?php
session_start();
include_once("vars.php");
?>











<!DOCTYPE html>
<html>
<head>
	<title>Availability</title>
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

</script>
</head>
<body>
	
<?php
		include_once("header.php");
?>
	
	<div class="available" id="available">
		<div class="container">
			<h3 class="title">Availability</h3>

			<div class="clearfix"> </div>
			<table width="100%" align="center">
			<tr>
			<th>Monday-Friday </th>
			<th>Saturday-Sunday </th>
			</tr>
			<tr>
			<td>9:00 A.M. - 1:00 P.M.</td>
			 <td>10:00 A.M. - 1:00 P.M.</td>
			 </tr></table>
			 
			 <form method="POST" class="horizontal">
<div class="form-group">

		<label for="date"  class="col-sm-3 control-label">  Pick Date :</label>
		<div class="col-sm-9">
		<input type="date" id="date" name="date" class="form-control">
		</div>
	</div>
	<br><br>
	 <div class="form-group">
		<label for="time"  class="col-sm-3 control-label">  Pick TIme :</label>
		<div class="col-sm-9">
			<select name="time" class="form-control">
			<option>Select Time </option>
			<option value="09:00-09:30">09:00-09:30 </option>
			<option value="09:30-10:00">09:30-10:00 </option>
			<option value="10:00-10:30">10:00-10:30 </option>
			<option value="10:30-11:00">10:30-11:00 </option>
			<option value="11:00-11:30">11:00-11:30 </option>
			<option value="11:30-12:00">11:30-12:00 </option>
			<option value="12:00-12:30">12:00-12:30 </option>
			<option value="12:30-01:00">12:30-01:00 </option>
			</select>
			</div>
	
<h3>Already a user </h3>
<div class="form-group">
<label for="id" class="col-sm-3 control-label">Pid:</label>
<div class="col-sm-9">
<input type="text" name="id" class="form-control">
</div>
</div>
<div class="form-group">
<label for="name" class="col-sm-3 control-label">Name:</label>
<div class="col-sm-9">
<input type="text" name="name" class="form-control" onkeydown="return isChar(event)">
</div>
</div>
<div class="form-group">
<label for="rad" class="col-sm-3 control-label">Gender:</label>
<div class="col-sm-9">
<label>Male<input type="radio" class="form-control" id="rad" name="rad"></label>
<label>Female<input type="radio" class="form-control" id="rad" name="rad"></label>
</div>
</div>
<div class="form-group">
<label for="age" class="col-sm-3 control-label">Age:</label>
<div class="col-sm-9">
<input type="text" name="age" class="form-control" onkeydown="return isNumber(event)" maxlength="2">
</div>
</div>
<div class="form-group">
<label for="email" class="col-sm-3 control-label"> Email:</label>
<div class="col-sm-9">
<input type="text" name="email"  class="form-control">
</div>
</div>
<div class="form-group">
<label for="contact" class="col-sm-3 control-label"> Phone No:</label>
<div class="col-sm-9">
<input type="text" name="contact"  class="form-control" maxlength="10" onkeydown="return isNumber(event)">
</div>
</div>

<div class="form-group">
<label for="address" class="col-sm-3 control-label"> Address:</label>
<div class="col-sm-9">
<input type="text-area" name="address"  class="form-control">
</div>
</div>
<button class="btn btn-default" type="submit" name="book" onclick="return confirm('Book Appointment')">Book Appointment</button>
<button class="btn btn-default" type="reset" name="cancel">Cancel</button>
		<?php
		if(isset($_POST["book"]))
		{
			echo "booked";
		}
		?>
		</div>
	</div>
		</form>
		
			 </div>
			 </div>
			 <?php
	include_once("footer.php");
?>


</body>
</html>