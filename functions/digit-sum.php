<style>
	div:nth-child(odd){
		background-color: lightgray;
	}
</style>

<?php 

echo digitSum(1235);


function digitSum($number){
	$sum = 0;  // initalization
	while($number>0) // conditon
	{
		echo "<div>";
		// block of code
		$lastDigit =  $number%10;
		echo "<p>last digit : {$lastDigit}</p>";

		echo "<p> before addition sum : {$sum}</p>";
		$sum += $lastDigit;
		echo "<p> after addition  sum : {$sum}</p>";
		echo "<p> before updation number : {$number}</p>";
		$number = floor($number / 10); // upadate statement
		echo "<p> after Update  number : {$number}</p>";
		echo "</div>";
	}

	return $sum;
}

?>