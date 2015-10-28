<?php
	if (isset($_POST['submit']))
	{
		//echo '<a href="../index.php"><- Назад</a><br>';

		$login = $_POST['login'];
		$password = $_POST['password'];

		session_start();
		if ($login == 'admin' AND $password == '123')
		{
			$_SESSION['rank'] = 'admin';
			//echo 'Вошли как администратор';
			header('Location: ../index.php');
		}
		elseif ($login == $_SESSION['rankU'] AND $password == $_SESSION['passU'])
		{
		$_SESSION['rank'] = $login;
		//echo "Вошли как пользователь";
		header('Location: ../index.php');
		}
	}
?>