<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:green;
  opacity:0.6;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  padding-right: 220px;
  text-decoration: none;
}

li a:hover {
  background-color:black;
}
body{
  background-image: url("download.jpg");
  background-color: #cccccc;
  height: 200px;
  background-position: center;
  background-repeat: no-repeat;
    background-size: cover;

}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="home.php" target="bottom">Home</a></li>
  <li><a href="log.php" target="bottom">Login</a></li>
  <li><a href="register.php" target="bottom">Register</a></li>
  
  <li><a href="about.php"></a></li>
</ul>
</body>
</html>