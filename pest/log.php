<body><div class="logo"></div>



  <div id="wrapper">



 <form method="POST" action="" name="lform" align="center" >



   <div id="email_div">



   <label>Name</label>



   <input type="text" name="username" class="textInput"><br><br>
   <div id="email_error"></div>
   </div>
   <div id="password_div">
   <label>Password</label> 
   <input type="password" name="password" class="textInput"><br><br>
   </div>
<div>
<input type="submit" name="login" value="Login" class="btn">
 </div>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST["login"]))
{
$name=$_POST['username'];
$pwd=$_POST['password'];
$con=mysqli_connect("localhost","root","","snist");
$result=mysqli_query($con,"select *from login where name='$name' and password='$pwd'");
if(mysqli_num_rows($result)!=0)
{
session_start();
$_SESSION['Name']=$name;
header('Location:plant.php');
}
else
{
echo "<script>alert('Invalid username or Password');</script>";
}
}
?>