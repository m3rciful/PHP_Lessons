<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sergei PHP</title>
</head>
<body>
<h2>Калькулятор</h2>
<?php
require "f_calc.php";

if ( isset($_POST["submit"]) )
{
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	$action = $_POST["action"];
	$result =  my_calc($num1,$num2,$action); 
}
?>

<form method="post">
	<input type="text" name="num1">
	<select name="action">
  		<option value="+">+</option>
  		<option value="-">-</option>
  		<option value="*">*</option>
  		<option value="/">/</option>
	</select>
	<input type="text" name="num2">
	<input type="submit" name="submit" value=" = "> <?php echo $result; ?>
</form>

<?php 
	echo "<hr>";
	// --------------------------------------------------------------
	include ("f_maket.php");
	echo make_table(5,7);
?>
</body>
</html>