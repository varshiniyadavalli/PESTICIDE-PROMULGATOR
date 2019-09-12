<?php 
	session_start();
	?>
<html>
<head>
	<style>
body{
	background-color:#7395AE;
	font-size:30px;
	font-family:timesnewroman;
}
table{
	font-size:20px;
	font-family:timesnewroman;
}
p{
	font-size:20px;
	font-family:timesnewroman;
}
	
</style>
<script type="text/javascript">
function val( )
{
	alert("your review is taken");
}
</script>
</head>
<body><center>
   <h1>cotton</h1>
<img src="cotton.jpg" height=200px width=200px></center>
<center><table>
	<tr>
		<td><B>TYPE OF SOIL</B></td>
		<td>&nbsp &nbsp Black Soil</td>
	</tr>
	<!--<tr>
	  <center><td colspan="2">PESTICIDES</td></center>
	</tr>-->
	  <td><B>SEEDS USED<B></td>
	  <td><ol type="a">
	  	<li>jadoo seeds</li>
	  	<li>nuzuweedu seeds</li>
	  	<li>suraksha</li></ol></td>
	</tr>
	<tr>
		<td><B>&nbsp &nbsp PESTS</B></td>
		<td><B>PESTICIDE</B></td>

	</tr>
	<tr>
		<td>Redspidermate,bug<br>
		whiteflies,caterpillar</td>
		<td>&nbsp &nbsp Propen</td>
	</tr>
	<tr>
		<td>greenleafhopper,Aphid<br>
		Plumemouth,Bollworms</td>
		<td>&nbsp &nbsp Monorin</td>
    </tr>
    <tr>
    	<td>Aphid,Thrips<br>
    	Pod borer, Plume mouth</td>
    	<td>&nbsp &nbsp UPL - Phoskill</td>
    </tr>
	</center>
</table>
<center>
<p><B>Diseases</B></p>
<dl>
<dt>1.Asochyta blight</dt>
<dd><img src="cdisease.jpg" height=200px width=200px>
     <p><B>Symptoms</B><br>
	   Small, circular brown lesions on cotyledons and seedling leaves which expand and <br>
	   develop a concentric pattern; necrotic areas coalesce and often have a purple <br>
	   margin; centers of lesions may dry out and drop form the plant creating a "shot-hole"
<br>	   appearance on the leaves.<br>
<p><B>management</B><br>
Plow crop residue into the soil to reduce inoculum levels; provide plants with adequate<br>
 irrigation and nutrients, particularly potassium; applications of appropriate foliar <br>
 fungicides may be required on susceptible cultivars</p>
</dd></center>
</dl><center>
<form>
<p>Review</p><textarea name="r" placeholder="post your review" rows=5 cols=50 ></textarea><br>
<input type="submit" value="submit" onclick=val() >
</form>
</center>

</body>
</html>

