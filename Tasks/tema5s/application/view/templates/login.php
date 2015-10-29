<?php ob_start() ?>

	<div id="content">
	
		<form action="#" method="POST" id="login-form">
		
			<fieldset>

				<p>
					<label for="login-username">Имя пользователя</label>
					<input type="text" id="login" class="round full-width-input" autofocus />
				</p>

				<p>
					<label for="login-password">Пароль</label>
					<input type="password" id="password" class="round full-width-input" />
				</p>
				
				<p><a href="index.php/reg">Регистрация</a></p>
				
				<a href="dashboard.html" class="button round blue image-right ic-right-arrow">Войти</a>

			</fieldset>

			<br/><div class="information-box round">Just click on the "LOG IN" button to continue, no login information required.</div>

		</form>
		
	</div>

<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php"; ?>