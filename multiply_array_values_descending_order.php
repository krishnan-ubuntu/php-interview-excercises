<?php 
/*
Receive an array of numbers as input and multiply each number by itself and create a new array. Re-arrange the new array in descending order.
 */
function inverseArray($array = false) 
{
	if (is_array($array)) 
	{
		if (!empty($array)) 
		{
			$newArray = array();

			for ($i=0; $i < count($array) ; $i++) 
			{
				$numSquared = $array[$i] * $array[$i];

				array_push($newArray, $numSquared);
			}

			rsort($newArray);

			print_r($newArray);
			
		}
		else 
		{
			echo 'The array is empty';
		}
		
	}
	else  
	{
		echo 'Please provide an array';
	}
}




inverseArray([231,129,390]);