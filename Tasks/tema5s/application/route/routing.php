<?php

//echo  $_SERVER['REQUEST_URI'];
$uri = $_SERVER['REQUEST_URI'];
$u = explode('?', $uri);
$uri=$u[0];
//echo "<br>newUri=".$uri;


if ($uri == '/PHP_Lessons/Tasks/tema5s/' OR $uri == '/PHP_Lessons/Tasks/tema5s/index.php') 
{
	$response = show_login();
}
elseif ($uri == '/PHP_Lessons/Tasks/tema5s/index.php/reg') 
{
	$response = show_reg();
}
elseif ($uri == '/PHP_Lessons/Tasks/tema5s/index.php/logout') 
{
	$response = logout_action();
}
?>
