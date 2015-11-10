<!DOCTYPE html>
<html>
<head>
	<title>Задание Тема 5</title>
	<script src="js/jquery.min.js"></script>
</head>
<body>

<?php
	session_start();
	if ( empty($_SESSION['rank']))
	{
		include 'view/login_view.php';
	}
	else
	{
		echo 'Привет, <b>' .$_SESSION['rank']. '</b> <a href="actions/logout.php">Выход</a>';
	}

	include 'javascript.php';
?>


</body>
</html>