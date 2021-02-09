<?php 

	$mobileNumbers = ['7893425610','05678903449','+917893456610','5680903449'];
	perfix($mobileNumbers);

	function perfix($mobileNumbers)
	{
		for($index=0; $index<count($mobileNumbers); $index++)
		{
			$len = strlen($mobileNumbers[$index]);

			if($len==11)
			{
				$mobileNumber = '+91'.substr($mobileNumbers[$index],1,$len);

			}
			elseif($len==13)
			{
				$mobileNumber = $mobileNumbers[$index];
			}else{
				$mobileNumber = '+91'.$mobileNumbers[$index];
			}

			

			echo "<p>{$mobileNumber}</p>";
		}
	}

 ?>