<?php
	session_start();
	if (isset($_SESSION['rank']) AND $_SESSION['rank'] == 'admin')
	{
		header('Location:main.php');
	}
	elseif (isset($_SESSION['rankU']) AND $_SESSION['rank'] == $_SESSION['rankU'])
	{
		header('Location: main.php');
	}
?>
<a href="main.php"><- Назад</a>

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