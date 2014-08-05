<?php
	require_once '../core/init.php';
	$title = $_POST['title'];
	$content = $_POST['content'];
	$data = array();
	$mailDate = date("Y-m-d h:i:sa");
	
	//now try to save the content to the database...
	
?>