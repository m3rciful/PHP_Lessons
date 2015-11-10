<?php
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
?>
