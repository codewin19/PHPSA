<?php 

if(isset($_COOKIE['fav_color'])){
	echo "Your Like {$_COOKIE['fav_color']} !";
}else{
	echo "You dont have value in your cookies!";
}

?>