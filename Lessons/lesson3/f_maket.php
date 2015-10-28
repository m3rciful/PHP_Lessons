<?php
function make_table($x,$y)
{
	$text='';

	$text.='<table border="1" cellpadding="0" cellspacing="0">';
	for($i=1;$i<=$y;$i++)
	{	
		//---------color
		$color='#ff9';//white
		$text.='<tr style="background-color:'.$color.';">';
		
		for($j=1;$j<=$x;$j++)
		{			
			$text.='<td width=30 align=center>'.$i.':'.$j.'</td>';
		}
		
		$text.='</tr>';		
	}
	
	$text.='</table>';	
	
	return $text;	
}

function make_tableN($x,$y)
{
	$text='';

	$text.='<table border="1" cellpadding="0" cellspacing="0">';

	$text.='<tr>';

		for($h=1;$h<=$x;$h++)
			$text.='<th width=30 align=center style="background-color:#E0E0D1;">'.$h.'</th>';
		
	$text.='</tr>';		


	for($i=1;$i<=$y;$i++)
	{	
		//---------color---------
		if ($i % 2)
			$color='#fff';//white
		else
			$color='#FFFF66'; //yellow

		$text.='<tr style="background-color:'.$color.';">';

		for($j=1;$j<=$x;$j++)
		{
			//---------color---------
			if ($j % 2 == 0)
				$color='#FFCC66'; // orange
			else
				$color = 'none'; // no color
	
			$text.='<td width=30 align=center style="background-color:'.$color.';">'.chr($i + 64).'</td>';
		}
		
		$text.='</tr>';		
	}
	
	$text.='</table>';	
	
	return $text;	
}
?>