<?php 
	//$colors = ['red','blue','green'];
	$colors = array('red','blue','green',"yellow","teal");
	$colors[1] = 'black';
    //array_push($colors,'lightgreen');
    array_pop($colors);
	foreach ($colors as $color) {
		echo "{$color}<br>";
	}
 ?>