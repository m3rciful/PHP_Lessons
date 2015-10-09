<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sergei PHP</title>
</head>
<body>
<?php
	$country=array("Эстония", "Россия", "Норвегия", "Германия");
	// --------------------------------------------------------------

	echo "<h2>Вариант 1 (foreach)</h2>";
	$text = "";
	foreach ($country as $v) 
	{
	 	$text.=$v. ', ';
	} 
	echo "<br>".$text;

	 // --------------------------------------------------------------

	echo "<h2>Вариант 2 (foreach)</h2>";
	$text = "";
	$k=0;
	foreach ($country as $v) 
	{
		$k++;
		if($k==count($country))
	 		$text.=$v;
	 	else
	 		$text.=$v.', ';
	} 
	echo "<br>".$text;

	// --------------------------------------------------------------

	echo "<h2>Вариант 3 (for)</h2>";
	$text = "";
	for($i=0; $i<count($country);$i++)
	{
		$text.=$country[$i]. ", ";
	} 
	echo "<br>".$text;

	// --------------------------------------------------------------

	echo "<h2>Вариант 4 (for with trim)</h2>";
	// trim — Удаляет пробелы (или другие символы) из начала и конца строки.

	$text = "";
	for($i=0; $i<count($country);$i++)
	{
		$text.=$country[$i]. ", ";
	} 
	echo "<br>".trim($text,", ");

	// --------------------------------------------------------------

	echo "<h2>Вариант 5 (list li, ul)</h2>";
	// trim — Удаляет пробелы (или другие символы) из начала и конца строки.
	
	$text = "";
	for($i=0; $i<count($country);$i++)
	{
		$text.="<li>".$country[$i]."</li>";
	} 
	echo "<ul>".$text. "</ul>";
	echo "Всего стран: ".count($country);
?>
</body>
</html>