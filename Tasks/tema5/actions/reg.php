<a href="../index.php"><- Назад</a><br>
<?php
	if (isset($_POST['login']) AND isset($_POST['password']) AND isset($_POST['password2']))
	{
		$login = $_POST['login'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];

		if (!$login)
			echo 'no login';
		elseif (!$password)
			echo 'no pass';
		elseif ($password != $password2)
			echo 'no passN';
		else
		{
			session_start();
			$_SESSION['rankU'] = $login;
			$_SESSION['passU'] = $password;

			echo 'OK';
			//echo 'Новый пользователь <b>'. $login. '</b> добавлен!';
		}
	}
	else
	{
?>
<table>
	<tr>
		<th colspan="2"><h3>Регистрация пользователя</h3></th>
	</tr>
	<form method="post" name="form2">
		<tr>
			<td colspan="2"><input type="text" name="login" id="login" placeholder="Имя пользователя"><br><br></td>
		</tr>
		<tr>
			<td colspan="2"><input type="password" name="password" id="password" placeholder="Пароль"><br><br></td>
		</tr>
		<tr>
			<td colspan="2"><input type="password" name="password2" id="password2" placeholder="Пароль еще раз"><br><br></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" id="submit" value="Регистрация"></td>
			<td><a href="../index.php">Войти</a></td>
		</tr>
	</form>
</table>
<?php
}
?>