<?php 
	mysql_connect("localhost","root","") && mysql_select_db("message_db") or die("error");
	$app = 
	$query = "SELECT * FROM message";
	$result = mysql_query($query);
?>
<html>
<head>
	<title>message</title>
</head>
<body>
		<div style = "margin-left:200px;margin-top:20px"> <h2 style = "margin-left:230px" >Message Datas</h2>
	<table border = "1">

			<tr><thead><td><h4><center>ID</center></h4>
			</div></td>
			<td><h4><center>Name</center></h4></div></td>
			<td><h4><center>Email</center></h4></div></td>
			<td><h4><center>Message</center></h4></div></td>
			<td><h4><center>Date Posted</center></h4></div></td>
			<td><h4><center>Approve</center></h4></div></td>
			<td><h4><center>Action</center></h4></div></td>
			</thead></tr>
			<?php
				if(mysql_num_rows($result) > 0){
					while($row = mysql_fetch_assoc($result)){ ?>
					<?php if( $row['is_approved']  == ('N')){ 

				?>
				<tr>
			<td><div class = "span well" style = "height:40px;width:15px"><center><?=$row['id']?></center></div></td>
			<td><div class = "span1 well" style = "height:40px;width:40px"><center><?=$row['name']?></center></div></td>
			<td><div class = "span1 well" style = "height:40px;width:120px"><center><?=$row['email']?></center></div></td>
			<td><div class = "span3 well" style = "height:40px;width:160px"><center><?=$row['message']?></center></div></td>
			<td><div class = "span1 well" style = "height:40px;"><center><?=$row['date_posted']?></center></div></td>
			<td><div class = "span well" style = "height:40px;"><center><?=$row['is_approved']?></center></div></td>
			<td><div class = "span2 well" style = "height:40px;width:100px" >
				<a href="update.php?id=<?=$row['id'];?>"><input type = "button" class = "btn btn-success" value = "Approve" style = "width:50px;background-color:orange;"></a>
				<a href="delete.php?id=<?=$row['id'];?>"><input type = "button" class = "btn btn-success" value = "Delete" style = "width:45px;background-color:Red;"></a>
				</tr>
				<tr>
				<?php
						}else{
							?>

			<td><div class = "span well" style = "height:40px;width:15px"><center><?=$row['id']?></center></div></td>
			<td><div class = "span1 well" style = "height:40px;width:40px"><center><?=$row['name']?></center></div></td>
			<td><div class = "span1 well" style = "height:40px;width:120px"><center><?=$row['email']?></center></div></td>
			<td><div class = "span3 well" style = "height:40px;width:160px"><center><?=$row['message']?></center></div></td>
			<td><div class = "span1 well" style = "height:40px;"><center><?=$row['date_posted']?></center></div></td>
			<td><div class = "span well" style = "height:40px;"><center><?=$row['is_approved']?></center></div></td>
			<td><div class = "span2 well" style = "height:40px;width:100px" >
				<a href="reject.php?id=<?=$row['id'];?>"><input type = "button" class = "btn btn-success" value = "Reject" style = "width:50px;background-color:orange;"></a>
				<a href="delete.php?id=<?=$row['id'];?>"><input type = "button" class = "btn btn-success" value = "Delete" style = "width:45px;background-color:Red;"></a>
							<tr>
							<?php
						}
					}
					}else{
						echo "no record";
					}
					?>
					</table>
					<a href="mid_end.php"><input type = "button" value = "Messages" style = "margin-top:10px;margin-left:210px"></a>
					<a href="front_end.php"><input type = "button"value = "Create Message" ></a>
					</div>

</body>
</html>
