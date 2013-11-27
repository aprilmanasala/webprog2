<html>
<head>
	<title>MESSAGE</title>
</head>
<body>
	<table border = "1" style = "margin-left:400px;margin-top:40px;width:175px;height:340px"><tr><td>
	<h2 style = "margin-top:10px"><center>Post Message</center></h2>
	<form action="coding.php" method="POST">
		<div style = "margin-left:60px">
		Name:<br></div><div  style = "margin-left:10px">
		<input type="text" name="name">
		<br></div><div  style = "margin-left:60px">
		Email:<br></div><div style = "margin-left:10px">
		<input type="text" name="email">
		<BR></div><div style = "margin-left:60px">
		Message:<br></div><div style = "margin-left:10px">
		<textarea name="message" style = "width:144px"></textarea></div><div style = "margin-left:30px">
		<br> <input type= "Submit" value="Post Message" style = ";background-color:magenta"></div>
		</form> <div style = "margin-left:30px;margin-top:10px">
		<a href="mid_end.php">
		<input type= "Submit" value="View Message" style = ";background-color:yellow"></div>
		</a></td></tr>
	</table>
</body>
</html>
