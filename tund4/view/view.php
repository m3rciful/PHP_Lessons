<?php
$page=$_GET['page'];
if ($page ==1)
	$page="content/history.php";
elseif ($page == 2)
	$page="content/education.php";
elseif ($page == 3)
	$page="content/news.php";
elseif ($page == 4)
	$page = "content/kontakt.php";
else
	$page="content/boss.php";
include $page;
?>