<?php 
   require_once 'db.php';
   if(isset($_GET['id']))
   {
		$result = mysqli_query($conn,"SELECT * FROM mytable WHERE id=".$_GET['id']);
   }else{
   	$result = mysqli_query($conn,"SELECT * FROM mytable");
   }
   $rows = mysqli_fetch_all($result);
   echo json_encode($rows);
 ?>