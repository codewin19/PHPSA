<!DOCTYPE html>
<html>
<head>
	<title>Table Using While loop</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			
		}

		body{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			flex-direction: column;
		}

		form{
			display: inherit;
			flex-direction: column;
			gap:12px;
			margin-bottom: 12px;
		}

		table{
			border-spacing: 0;
		}

		table td{
			padding: 8px;
		}

		table tr:nth-child(odd){
			background-color: lightgray;
		}
		
	</style>
</head>
<body>
	<form method="post">
		<label for="">Enter a Number : </label>
		<input type="number" name="tabel_number">
		<input type="submit" name="genrate" value="Genrate Table">
	</form>
	<?php 
		
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$number = trim($_POST['tabel_number']);

			
			echo "<table>";
			for( $count  = 1;$count <= 10; $count++ )
			{
				echo "<tr><td>{$number}</td> <td>x</td> <td>{$count}</td> <td>=</td> <td>".($number*$count)."</td> </tr>";

			}
			echo "</table>";

		}


		// for loop (Entery Controled Loop)
		
		
	 ?>

</body>
</html>



