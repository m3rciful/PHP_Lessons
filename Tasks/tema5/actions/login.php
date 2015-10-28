<?php
	session_start();
	if (isset($_POST['login']) AND isset($_POST['password']))
	{
		echo '<a href="../main.php"><- Назад</a><br>';

		$login = $_POST['login'];
		$password = $_POST['password'];

		// == for test =======================
		//echo $login . '<br>' . $password;

		if ($login == 'admin' AND $password == '123')
		{
			$_SESSION['rank'] = 'admin';
			echo 'Вошли как администратор';
		}
		elseif ($login == $_SESSION['rankU'] AND $password == $_SESSION['passU'])
		{
			$_SESSION['rank'] = $login;
			echo "Вошли как пользователь";
		}
		else
		{
			if (!$login)
				echo 'no login';
			elseif (!$password)
				echo 'no pass';
			else
				echo 'error';
		}
	}
?>