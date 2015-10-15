<?php 
	echo $login;
	if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['passwordN']))
	{
		$login= $_POST['login'];
		$password = $_POST['password'];
		$passwordN = $_POST['passwordN'];

		//------------------------------------------
		if ( !empty($login) && !empty($password) && $password == $passwordN )
		{
			echo "OK"; // true
		}
			else
			{
				if (empty($login) && empty($password) && empty($passwordN)) echo 'no input';
				elseif (!$login) echo 'no login';
				else if (!$password) echo 'no pass';
				else if ($password != $passwordN) echo 'no passN';
				else {
					echo 'error';
				}

			}
	}
?>
