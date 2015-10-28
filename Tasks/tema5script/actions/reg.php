
<?php
	if (isset($_POST['login']) AND isset($_POST['password']))
	{
		$login = $_POST['login'];
		$password = $_POST['password'];
		$passwordN = $_POST['passwordN'];

		if(!empty($login) AND !empty($password))
		{	
			echo "OK";
			/*
			session_start();
			if ($login == 'admin' AND $password == '123')
			{
				$_SESSION['rank'] = 'admin';
				echo 'Вошли как администратор';
				header('Location: ../index.php');
			}
			elseif ($login == $_SESSION['rankU'] AND $password == $_SESSION['passU'])
			{
				$_SESSION['rank'] = $login;
				echo "Вошли как пользователь";
				header('Location: ../index.php');
			}
			*/
		}
		else
		{
			if(!$login)
				echo "no login";
			elseif(!$password)
				echo "no pass";
			elseif($password!=$passwordN)
				echo "no passN";			
			else 
				echo "vale";
		}
	}
	else
	{
?>
<table>
	<tr>
		<th colspan="2"><h3>Регистрация пользователя</h3></th>
	</tr>
	<form method="post" name="form" id="form">
		<tr>
			<td colspan="2"><input type="text" name="login" id="login" placeholder="Имя пользователя"><br><br></td>
		</tr>
		<tr>
			<td colspan="2"><input type="password" name="password" id="password" placeholder="Пароль"><br><br></td>
		</tr>
		<tr>
			<td colspan="2"><input type="password" name="passwordN" id="password2" placeholder="Пароль еще раз"><br><br></td>
		</tr>
		<tr>
			<td><button type="submit">Регистрация</button></td>
			<td><a href="../index.php">Войти</a></td>
		</tr>
	</form>
</table>
<?php
}
?>
