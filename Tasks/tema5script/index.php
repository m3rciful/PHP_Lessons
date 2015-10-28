<!DOCTYPE html>
<html>
<head>
	<title>Задание Тема 5</title>
	<script src="js/jquery.min.js"></script>
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
	<div id="reg_result"></div>
	<form method="post" name="form" id="form">
		<tr>
			<td colspan="2"><input type="text" name="login" id="login" placeholder="Имя пользователя"><br><br></td>
		</tr>
		<tr>
			<td colspan="2"><input type="password" name="password" id="password" placeholder="Пароль"><br><br></td>
		</tr>
		<tr>
			<td><button type="submit">Войти</button></td>
			<td><div id="login_result"></div></td>
		</tr>
		<tr>
		  	<td colspan="2"><a href="actions/reg.php">Регистрация пользователя</a></td>
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

<script type="text/javascript">
	$("form").submit(function() {
	$.ajax({
           type: "POST",
           url: "actions/reg.php",
           data: $("form").serialize(),
           success: function(data)
           {
	if (data === "OK")
	 {			 
	     $("#reg_result").html('<div >Kasutaja '+form.login.value +' registreeritud!</div>');
	     $("#login_result").html('');
	     form.login.value = form.password.value =form.passwordN.value= '';      
	 }
	else if (data==="no login")
	 {
	    $("#login_result").html ('<div >Kasutajanimi on puudu! </div>');
	   $("#reg_result").html ('');
	  }
	 else if (data==="no pass")
	   {
	     $("#login_result").html ('<div >Salasõna on puudu! </div>');
	     $("#reg_result").html('');			
	   }
	 else if(data==="no passN")
	    {
	      $("#login_result").html('<div >Salasõna on vale! Kontrolli salasõna</div>');
	      form.password.value =form.passwordN.value= '';
	      $("#reg_result").html('');				
	    }			   
	else
 	{
 		$("#login_result").html('<div >Vale andmed!</div>');
	    $("#reg_result").html('');				
	}
           }
         });
  	return false;
});
</script>


</body>
</html>