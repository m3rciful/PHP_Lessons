<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Регистрация пользователя</title>

    
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>

    <div style="padding-left:200px;">
	
	<!-----------  !!!!!!!!!!!  -------------->
	<div id="login_result"></div> 
  <div id="reg_result"></div> 
      <form  id="form">	   
        <h3 >Регистрация пользователя</h3>
        <input type="text" name="login"   placeholder="Имя пользователя" autofocus >
        <p><input type="password" name="password"  placeholder="Пароль" ></p>
        <p><input type="password" name="passwordN"  placeholder="Пароль еще раз" ></p>	
        <p><button  type="submit">Регистрация</button></p>
		
      </form>
		
    </div>  
	<!-----------  !!!!!!!!!!!  -------------->
	

    <script src="js/jquery.min.js"></script>  <!-- ЭТОТ скрипт обязательно!          -->
 
  
    <script type="text/javascript">
	   $("form").submit(function() {
		$.ajax({
           type: "POST",
           url: "actions/reg.php", //!!!!!!!!!!!!!!
           data: $("form").serialize(),
           success: function (data)
           {
			       //обработка
			       if(data==="OK")
             {
                $("#reg_result").html('User ' + form.login.value+' reg ok');
              form.login.value = form.password.value = form.passwordN.value = null;
                $("#login_result").html('');
              }
              else if (data==="no input")
              {
                  $("#login_result").html('no data'); //ERROR
                  $("#reg_result").html(''); // ITOG
                  form.password.value=form.passwordN.value = null;
              }
              else if (data==="no login")
              {
                  $("#login_result").html('No name'); //ERROR
                  $("#reg_result").html(''); // ITOG
              }
              else if (data==="no pass")
              {
                  $("#login_result").html('No password'); //ERROR
                  $("#reg_result").html(''); // ITOG
              }
              else if (data==="no passN")
              {
                  $("#login_result").html('Pass1 != Pass2'); //ERROR
                  $("#reg_result").html(''); // ITOG
                  form.password.value=form.passwordN.value = null;
              }
           }
         });
		return false;
	});
	</script>

  </body>
</html>
