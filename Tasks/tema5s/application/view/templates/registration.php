<?php ob_start() ?>

	<div id="content">
	
		<form action="#" method="POST" id="login-form">
		
			<fieldset>

				<p>
					<label for="login">Имя пользователя</label>
					<input type="text" id="login" class="round full-width-input" autofocus />
				</p>

				<p>
					<label for="password">Пароль</label>
					<input type="password" id="password" class="round full-width-input" />
				</p>

				<p>
					<label for="passwordN">Пароль еще раз</label>
					<input type="password" id="passwordN" class="round full-width-input" />
				</p>
				
				<a href="reg" class="button round blue image-right ic-right-arrow">Регистрация</a>

			</fieldset>

			<br/><div class="information-box round">Just click on the "LOG IN" button to continue, no login information required.</div>

		</form>
		
	</div>

<?php $content = ob_get_clean(); ?>

<?php include "application/view/templates/layout.php"; ?>