<?php

function show_login()
{
	$html = render_template('application/view/templates/login.php', array());
	return $html;
}
function show_reg()
{
	$html = render_template('application/view/templates/registration.php', array());
	return $html;
}

function render_template($path, array $args)
{
	extract($args);
	ob_start();
	require $path;
	$html = ob_get_clean();
	return $html;
}

?>