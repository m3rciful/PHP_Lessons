<script type="text/javascript">
	$("form").submit(function() 
	{
		$.ajax({
		type: "POST", 
		url: "actions/reg.php", 
		data: $("form").serialize(), 
		success: function(data)
		{
			if (data === "OK")
	 		{			 
	     		$("#reg_result").html('<div>Пользователь '+form.login.value +' зарегестрирован!</div>');
	     		$("#login_result").html('');
	     		form.login.value = form.password.value = form.passwordN.value = '';      
	 		}
			else if (data==="no login")
	 		{
	    		$("#login_result").html ('<div >Имя пользовтаеля отсутствует</div>');
	   			$("#reg_result").html ('');
	  		}
	 		else if (data==="no pass")
	   		{
	     		$("#login_result").html ('<div >Пароль отсутствует</div>');
	     		$("#reg_result").html('');			
	   		}
	 		else if(data==="no passN")
	   		{
	      		$("#login_result").html('<div>Пароль неправльный! Проверьте пароль.</div>');
	     		form.password.value = form.passwordN.value= '';
	      		$("#reg_result").html('');				
	    	}			   
			else
	 		{
	 			$("#login_result").html('<div >Неверные данные</div>');
	    		$("#reg_result").html('');				
			}
	    } });
		return false;
	});
</script>