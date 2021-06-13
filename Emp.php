<html>
<head>
<title>EMPLOYEE DETAILS</title>
<script type="text/javascript">
function findselected(val) { 
    var cat = val;
   if (cat == "part_time") {
      document.getElementById("hour").disabled = false;
   } else {
     document.getElementById("hour").disabled=true;
   }
} 
</script> 
<style>
body
{
	background-color:black;
}
th
{
	background-color:black;
	color:blue;
	font-size:25px;
}
table
{
	background-color: #f4c2c2;
}
.error {color: #FF0000;}
</style>
</head>
<body>

<br><br><br><center>
<form action="Emp_9.php" method="POST" enctype="multipart/form-data">
<table align="center" border="2">
		<tr>
			<th colspan="2">EMPLOYEE DETAILS</th>
		</tr>
<tr>
	<td>Emp image:</td>
	<td><input type="file" name="file"></td>
</tr>
<tr>
	<td>Emp No:</td>
	<td><input type="text" name="eno" size="30" required></td>
</tr>
<tr>
	<td>First Name:</td>
	<td><input type="text" name="fname" size="30" required></td>
</tr>
<tr>
	<td>Last Name:</td>
	<td><input type="text" name="lname" size="30" required></td>
</tr>
<tr>
	<td>Address:</td>
	<td><input type="text" name="addr" size="30" required></td>
</tr>
<tr>
	<td>Gender:</td>
	<td><input type="text" name="gender" size="30" required></td>
</tr>
<tr>
	<td>Designation:</td>
	<td><input type="text" name="desg" size="30" required></td>
</tr>
<tr>
	<td>Phone-Number:</td>
	<td><input type="text" name="phone" size="30" required></td>
</tr>
<tr>
	<td>Emp Category:</td>
	<td><input type="radio" name="cat" id="cat" value="part_time"  onChange="findselected(this.value)"/>Part Time
                    <input type="radio" name="cat"  id="cat" value="full_time"  onChange="findselected(this.value)" />Full Time
                    <input type="radio" name="cat"  id="cat" value="contract"   onChange="findselected(this.value)"/>Contract</td>
</tr>
<tr>
	<td>Number of hours:</td>
	<td><input type="text" name="hour" id="hour" size="30" required></td>
</tr>
<tr>
	<td>Basic Salary:</td>
	<td><input type="text" name="sal" size="30" required></td>
</tr>
<tr><td colspan="2" align="center"> <input type="submit" name="submit" value="SUBMIT"> <input type="reset" value="RESET"></td></tr>
</table>
</form>
<br><br><br>

</center>
</body>
</html>
