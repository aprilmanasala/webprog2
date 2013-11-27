<?php 
	mysql_connect("localhost","root","") && mysql_select_db("message_db") or die("error");
	
	$id = $_GET['id'];
	$query = "DELETE FROM message WHERE id ={$id}";
	$result = mysql_query($query);	
	echo "<script>alert('Successfully Deleted!!');window.location.href='back_end.php';</script>";

 ?>
