<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FORMS</title>
</head>
<body>
<h2>Method GET</h2>
<form method="get" name="form1" action="">
	<label for="Name">Username</label>
	<input type="text" name="name" id="name">
	<input type="password" name="pass" id="pass">
	<input type="submit" name="send" id="send" value="send get">
</form>
<?php 
	echo '<br><b>Registration info</b>'; 
	if($_GET['send'])
	{
		$name=$_GET['name'];
		$pass=$_GET['pass'];

		if (!empty($name) AND !empty($pass))
		{
			echo '<br>Today: '.date("d-m-Y H:i:s");
			echo '<br>User: '.$name;
			echo '<br>Pass: ' .$pass;
		}
	}
?>	
<hr>
<h2>Method POST</h2>
<form method="post" name="form2">
	<label for="Name">Username</label>
	<input type="text" name="name2" id="name2">
	<input type="password" name="pass2" id="pass2">
	<input type="submit" name="send2" id="send2" value="send post">
</form>
<?php 
	echo '<br><b>Registration info 2</b>'; 
	if($_POST['send2'])
	{
		$name2=$_POST['name2'];
		$pass2=$_POST['pass2'];

		if (!empty($name2) AND !empty($pass2))
		{
			echo '<br>Today: '.date("d-m-Y H:i:s");
			echo '<br>User: '.$name2;
			echo '<br>Pass: ' .$pass2;
		}
	}
?>	
</body>
</html>