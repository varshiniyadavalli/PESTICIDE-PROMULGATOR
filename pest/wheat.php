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
</style>
<script type="text/javascript">
function val( )
{
	alert("your review is taken");
	prompt("RATE YOUR EXPERIENCE");
}
</script>
</head>
<body><center>
   <h1>wheat</h1>
<img src="wheat.jpg" height=200px width=200px></center>
<center><table>
	<tr>
		<td><B>TYPE OF SOIL</B></td>
		<td>&nbsp &nbsp loam Soil</td>
	</tr>
	<!--<tr>
	  <center><td colspan="2">PESTICIDES</td></center>
	</tr>-->
	  <td><h4><B>SEEDS USED</B></td>
	  <td><ol type="a">
	  	<li>Narmada seeds</li>
	  	<li>GW-322</li>
	  	<li>Shine Brand seeds</li></ol></td>
	</tr>
	<tr>
		<td><B>PESTICIDE</B></td>
		<td><B>&nbsp &nbsp PESTS</B></td>
	</tr>
	<tr>
		<td>stink bugs,loctus<br>
			thrips<br>
		</td>
		<td>&nbsp &nbsp imdiacloprid</td>
	</tr>
	<tr>
		<td>Aphids,Whiteflies<br>
			leafhoppers
		</td>
		<td>&nbsp &nbsp Endulsofan</td>
	</tr>
	<!--<tr>
		<td>Annualgrasses<br>
			
		</td>
		<td>&nbsp &nbsp Acetochlor</td>
	</tr>-->
</center>
</table>
<form>
<p>Review</p><textarea name="r" placeholder="post your review" rows=5 cols=50 ></textarea><br>
<input type="submit" value="submit" onclick=val() >
</form>
</body>
</html>
