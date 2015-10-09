<?php
	function my_calc($num1, $num2, $action)
	{
		if ($action=="+")
		{
			$result = $num1 + $num2;
		}
		elseif ($action=="-")
		{	
			$result = $num1 - $num2;
		}
		elseif ($action=="*")
		{
			$result = $num1 * $num2;
		}
		elseif ($action=="/")
		{
			if ($num2==0)
				$result = "ERROR";
			else
			$result = $num1 / $num2;
		}
		return $result;
	}
?>