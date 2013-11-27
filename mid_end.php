<?php 
	mysql_connect("localhost","root","") && mysql_select_db("message_db") or die("error");
	$query = "SELECT * FROM message";
	$result = mysql_query($query);
?>
<html>
<head>
	<title>Message</title>

</head>
<body><table border ="1" style = "width:230px;margin-left:400px;margin-top:40px;"><tr><td>
	<h2><center>Message</center></h2>
	<center>
	<table border = "1">
		<TR>
			<?php
				if(mysql_num_rows($result) > 0){
					while($row = mysql_fetch_assoc($result)){ 
						 if( $row['is_approved']  == ('Y')){
						?>

			<td><?=$row['name']?><br>
			<?=$row['date_posted']?></td>
			<td><?=$row['message']?></td>
		</TR>

		<?php
		}else{	
			}
		}}else{
			echo "no record";
		}
		?>
		
	</table></center>
	<a href="front_end.php">
	<input type= "Submit" value="Create Message" style = "margin-left:50px;margin-top:10px;background-color:orange" >
	</a>
	<a href="back_end.php">
	<input type= "Submit" value="View Message Data" style = "margin-left:40px;margin-bottom:5px;margin-top:5px;background-color:yellow">
	</a>
	</td></tr></table>
</body>
</html>
