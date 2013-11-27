<?php 
mysql_connect("localhost","root") && mysql_select_db("message_db") or die ("error");

$name = $_POST['name'];
$email= $_POST['email'];
$message = $_POST['message'];
$app = "N";

$sql = "INSERT INTO message(name, email, message, date_posted, is_approved) VALUES ('$name', '$email','$message',current_date,'$app')";
$mysql = mysql_query($sql);

if($mysql){
		echo "<script>alert('New Data Inserted!!');window.location.href='front_end.php'</script>";
		
	}else{
		echo 'err';
	}
 ?>
