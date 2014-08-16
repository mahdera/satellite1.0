<?php
	require_once '../core/init.php';
	$title = $_POST['title'];
        $whichColumn = $_POST['whichColumn'];
	$content = $_POST['content'];
	$data = array();
	$postDate = date("Y-m-d h:i:sa");
	$modifiedBy = $_POST['userId'];//this line was using a Session variable instade...
        //replaced it with the $routeParams value sent from the controller...
	
	
	//now try to save the content to the database...
	$lowerBoxContent = new LowerBoxContent();
	$lowerBoxContent->setTitle($title);
	$lowerBoxContent->setContent($content);
	$lowerBoxContent->setPostDate($postDate);
	$lowerBoxContent->setModifiedBy($modifiedBy);
	$lowerBoxContent->setModificationDate($postDate);
        $lowerBoxContent->setWhichColumn($whichColumn);
	
	$saveLowerBoxContentObj = new LowerBoxContent();
	$saveLowerBoxContentObj->save($lowerBoxContent);
	
	$data['success'] = true;
	$data['message'] = "<div class='alert alert-success alert-dismissable'>" .
			"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>" .
			"Lower Box Content saved successfully!..." .
			"</div><br/>";
	
	echo json_encode($data);
?>