<!DOCTYPE html>
<html>
<head>
	<title>Задание Тема 5</title>
</head>
<body>

<?php
	session_start();
	if ( empty($_SESSION['rank']))
	{
?>
<table>
	<tr>
		<th><h3>Введите ваши данные</h3></th>
	</tr>
	<form action="actions/login.php" method="post" name="form2">
		<tr>
			<td><input type="text" name="login" id="login" placeholder="Имя пользователя"><br><br></td>
		</tr>
		<tr>
			<td><input type="password" name="password" id="password" placeholder="Пароль"><br><br></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" id="submit" value="Войти"></td>
		</tr>
		<tr>
		  	<td><a href="actions/reg.php">Регистрация пользователя</a></td>
		</tr>
	</form>
</table>
<?php
	}
	else
	{
		echo 'Привет, <b>' .$_SESSION['rank']. '</b> <a href="actions/logout.php">Выход</a>';
	}
?>

</body>
</html>