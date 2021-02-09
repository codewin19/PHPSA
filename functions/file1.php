<?php 


$user = "amar";

//echo strlen($username);
//
//
//

echo countVowels($user); // function calling




// function defination
function countVowels($username)
{
	$vowelCount = 0;

	// logic to count no of vowels
	for($i=0; $i < 4; $i++)
	{
		$ch = $username[$i];
		if( $ch==='a' || $ch==='e' || $ch==='i' || $ch==='o' || $ch==='u')
		{
			$vowelCount++;
		}
	}
	
	return $vowelCount;
}


 ?>