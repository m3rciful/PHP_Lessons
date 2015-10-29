
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<base href="<?php echo 'http://' .$_SERVER['HTTP_HOST'] . '/PHP_Lessons/Tasks/tema5s/'; ?>" />
	<link rel="stylesheet" href="public/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>

	<!-- TOP BAR -->
	<div id="top-bar">
		
		<div class="page-full-width">
			<a href="#" class="round button dark">Новости</a>
			<a href="#" class="round button dark image-right ic-settings">Настройки</a>
		</div>
	
	</div>
	
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">
	
			<div id="login-intro" class="fl">
				<h1>Регистрация пользователя</h1>
				<h5>Просмотр страницы для admin и зарегистрированного пользователя</h5>
			</div>
			
			<div class="fr">Привет, <b>admin</b> (<a href="#">Выход</a>)</div>
			
		</div>

	</div>
	
	<!-- MAIN CONTENT -->
	<?php echo $content; ?>
	
	<!-- FOOTER -->
	<div id="footer">
		<p>&copy; Copyright 2KTVRp-2015 <a href="http://www.merciful.ee">Sergei Novitskov</a>. All rights reserved.</p>
	</div>

</body>
</html>