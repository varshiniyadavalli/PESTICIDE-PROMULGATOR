<html>
<head>
  <link rel="stylesheet" type="text/css" href="rating_style.css">
  <script type="text/javascript">
  
   function change(id)
   {
      var cname=document.getElementById(id).className;
      var ab=document.getElementById(id+"_hidden").value;
      document.getElementById(cname+"rating").innerHTML=ab;

      for(var i=ab;i>=1;i--)
      {
         document.getElementById(cname+i).src="star2.png";
      }
      var id=parseInt(ab)+1;
      for(var j=id;j<=5;j++)
      {
         document.getElementById(cname+j).src="star1.png";
      }
   }

</script>
  
</head>

<body>

<h1>Star Rating System Using PHP and JavaScript</h1>

<?php
    /*$host="localhost";
    $username="root";
    $password="";
    $databasename="snist";*/

    $connect=mysqli_connect("localhost","root","","snist");
    //$db=mysqli_select_db($databasename);
	
    $select_rating=mysql_query("select php,asp,jsp from rating");
    $total=mysql_num_rows($select_rating);
  
    while($row=mysql_fetch_array($select_rating))
    {
	  $phpar[]=$php;
	  $aspar[]=$asp;
	  $jspar[]=$jsp;
	  
    }
    $total_php_rating=(array_sum($phpar)/$total);
    $total_asp_rating=(array_sum($aspar)/$total);
    $total_jsp_rating=(array_sum($jspar)/$total);
  
?>

<form method="post" action="insert_rating.php">
  <p id="total_votes">Total Votes:<?php echo $total;?></p>
  <div class="div">
	  <p>PHP (<?php echo $total_php_rating;?>)</p>
	  <input type="hidden" id="php1_hidden" value="1">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php1" class="php">
	  <input type="hidden" id="php2_hidden" value="2">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php2" class="php">
	  <input type="hidden" id="php3_hidden" value="3">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php3" class="php">
	  <input type="hidden" id="php4_hidden" value="4">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php4" class="php">
	  <input type="hidden" id="php5_hidden" value="5">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="php5" class="php">
  </div>

  <div class="div">
	  <p>ASP (<?php echo $total_asp_rating;?>)</p>
	  <input type="hidden" id="asp1_hidden" value="1">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="asp1" class="asp">
	  <input type="hidden" id="asp2_hidden" value="2">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="asp2" class="asp">
	  <input type="hidden" id="asp3_hidden" value="3">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="asp3" class="asp">
	  <input type="hidden" id="asp4_hidden" value="4">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="asp4" class="asp">
	  <input type="hidden" id="asp5_hidden" value="5">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="asp5" class="asp">
  </div>

  <div class="div">
  	  <p>JSP (<?php echo $total_jsp_rating;?>)</p>
	  <input type="hidden" id="jsp1_hidden" value="1">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="jsp1" class="jsp">
	  <input type="hidden" id="jsp2_hidden" value="2">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="jsp2" class="jsp">
	  <input type="hidden" id="jsp3_hidden" value="3">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="jsp3" class="jsp">
	  <input type="hidden" id="jsp4_hidden" value="4">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="jsp4" class="jsp">
	  <input type="hidden" id="jsp5_hidden" value="5">
	  <img src="images/star1.png" onmouseover="change(this.id);" id="jsp5" class="jsp">
  </div>

  <input type="hidden" name="phprating" id="phprating" value="0">
  <input type="hidden" name="asprating" id="asprating" value="0">
  <input type="hidden" name="jsprating" id="jsprating" value="0">
  <input type="submit" value="Submit" name="submit_rating">

</form> 

</body>
</html>

In this step we made 3 div element to rate three programming language PHP,ASP,JSP and put the star image in them whenever the user wants to give ratings user has to put the mouse over the star and we call a change function which get the star id and change the star image to coloured means.You may also like live voting system using Ajax and PHP.


In javascript change(id) function we get the id of star which the user put the mouse over that and then we make 2 for loops one is to blink all the previous star including him and second one is to blank all the next star excluding him.


And after that we use connect to the database and get Total votes and there rating by getting total ratings per language and then divide then divide each rating with total votes.You can also view our create captcha system using PHP tutorial to add captcha on rating system.



Step 3.Make a PHP file to store the ratings for Star Rating System

We make a PHP file named insert_rating.php

<?php
if(isset($_POST['submit_rating']))
{
  $host="localhost";
  $username="root";
  $password="";
  $databasename="sample";

  $connect=mysql_connect($host,$username,$password);
  $db=mysql_select_db($databasename);
  
  $php_rating=$_POST['phprating'];
  $asp_rating=$_POST['asprating'];
  $jsp_rating=$_POST['jsprating'];
  $insert=mysql_query("insert into rating values('','$php_rating','$asp_rating','jsp_rating')");
}
?>

In this step we get the value and store them to database.You can do validation to make your code more secure or you can view our How to do validation before and after submitting the form tutorial.



Step 4.Make a CSS file and define styling for Star Rating System

We make a CSS file and save it with name rating_style.css.

body
{
	background-color:#0B4C5F;
	font-family:helvetica;
	text-align:center;
}
h1
{
	margin-top:20px;
	font-size:40px;
	color:#E6E6E6;
}
#total_votes
{
	font-size:30px;
	color:#FE2E2E;
	font-weight:bold;
}
.div
{
	border:1px solid #E6E6E6;
	clear:both;
	margin-top:20px;
	height:100px;
	width:400px;
	padding:10px;
	margin-left:300px;
	border-radius:3px;
}
.div p
{
	margin:0px;
	font-size:20px;
	text-align:left;
	color:#E6E6E6;
}
img
{
	margin-top:10px;
	width:50px;
	height:50px;
	float:left;
	
}
input[type="submit"]
{
	border:none;
	background:none;
	background-color:#585858;
	width:100px;
	height:50px;
	color:white;
	border-radius:3px;
	font-size:17px;
	margin-top:20px;
}