
<html>
<head>
	<title>register</title>
	<style >
		h1{
		color:red;
		}
	</style>
	
	
</head>
<body>
	<center><h1>Sign up</H1></center>
	<form  method="post">
	<table  align="center" >
		<tr><td>Name:</td><td><input type="text" name="name" ></td></tr>
		
		<tr><td>Password:</td><td><input type="password" name="pass"  placeholder="**********"></td></tr>
	
		<tr><td>Phone number:</td><td><input type="text" name="no"></td></tr>
		
		
		
		<tr><td ><input type="submit" name="submit"></td></tr>										
	</table>
	</form>
	
</body>
</html>
	<?php
	
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
	$mob=$_POST['no'];

$pwd=$_POST['pass'];
		$con=mysqli_connect("localhost","root","","snist");
		$sql="insert into login values('$name',$mob,'$pwd')";
		mysqli_query($con,$sql);
		
		
		
	}
	?>