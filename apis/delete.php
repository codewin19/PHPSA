<?php 
	require_once 'db.php';

	if(isset($_GET['id']))
	{
		$result = mysqli_query($conn,"SELECT * FROM mytable WHERE id=".$_GET[id]);

		mysqli_query($conn, "DELETE FROM mytable WHERE id=".$_GET['id']);
	}


DROP TRIGGER IF EXISTS `mytable_deleted`;CREATE TRIGGER `mytable_deleted` AFTER DELETE ON `mytable` FOR EACH ROW INSERT INTO mytable_deleted SET cname = OLD.cname, email 
 ?>