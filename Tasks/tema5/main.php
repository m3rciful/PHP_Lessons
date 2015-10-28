<!DOCTYPE html>
<html>
<head>
	<title>Задание Тема 5</title>
</head>
<body>

<?php
	session_start();
	if ( empty($_SESSION['rank']) )
	{
		echo '<a href="admin.php">Войти</a>';
	}
	else
	{
		echo 'Привет, <b>' .$_SESSION['rank']. '</b> <a href="actions/logout.php">Выход</a>';
	}
?>

</body>
</html>