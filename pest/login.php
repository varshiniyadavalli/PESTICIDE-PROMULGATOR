<html>
<head>
<TITLE>SIGN IN</TITLE>
<style>
center{
	padding-top:50px;
	}
	</style>
</head>
<body>
<center>
<form action="" method="post">
<h1 style="color:blue; font-style:bold">Sign in</h1>
<p style="font-style:italic; color:green">
	Username:<input type="text" name="name" ><br><br>
	Password:<input type="password" name="pass" ><br></p>
	Dont have an account! <a href="register.php" target="bottom" >Sign Up</a><br>
	<input type="Submit" name="submit"><br>

</form>
<?php

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
$pwd=$_POST['pass'];
$con=mysqli_connect("localhost","root"," ","snist");
$sql="select * from login where name='$name' and password='$pwd'";

        $result1 = mysql_query("SELECT Name, password FROM Users WHERE Name = '".$name."' AND  password = '".$psw."'");
		if(mysql_num_rows($result1> 0)
			echo "sus";
</center>
</body>
<html>