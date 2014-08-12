<?php
	require_once '../core/init.php';
	$title = $_POST['title'];
	$content = $_POST['content'];
	$data = array();
	$postDate = date("Y-m-d h:i:sa");
	$modifiedBy = Session::get(Config::get('session/session_name'));
	
	
	//now try to save the content to the database...
	$centerBoxContent = new CenterBoxContent();
	$centerBoxContent->setTitle($title);
	$centerBoxContent->setContent($content);
	$centerBoxContent->setPostDate($postDate);
	$centerBoxContent->setModifiedBy($modifiedBy);
	$centerBoxContent->setModificationDate($postDate);
	
	$saveCenterBoxContentObj = new CenterBoxContent();
	$saveCenterBoxContentObj->save($centerBoxContent);
	
	$data['success'] = true;
	$data['message'] = "<div class='alert alert-success alert-dismissable'>" .
			"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>" .
			"Content saved successfully!..." .
			"</div><br/>";
	
	echo json_encode($data);
?>