<?php 
/*
This question is about cchecking if the provided string is a palindrome without using strrev
 */
function isPalindrome($string = false) 
{
	if (empty($string)) 
	{
		echo 'Please provide a string';
	}
	else  
	{
		$invertedStr 	= '';
		$santizedStr 	= sanitizeInput($string);
		$stingArr 	 	= str_split($santizedStr);
		$stingArrLen 	= count($stingArr);

		for ($i=($stingArrLen - 1); $i >= 0; $i--) 
		{
			$invertedStr = $invertedStr.$stingArr[$i];
		}

		if ($string === $invertedStr) 
		{
			echo 'The provided string is a planidrome';
			/*or
			return true;*/
		}
		else 
		{
			echo 'The provided string is not a planidrome';
			/*or
			return false;*/
		}
	}
}


function sanitizeInput($string) 
{
	$string = trim($string);
  	$string = stripslashes($string);
  	$string = htmlspecialchars($string);
  	return $string;
}


isPalindrome('racecar');