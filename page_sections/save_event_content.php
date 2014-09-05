<?php
	require_once '../core/init.php';
	$title = $_POST['title'];
	$eventDetail = htmlspecialchars($_POST['eventDetail']);
        //echo $newsDetail;
        //now get the id of the author...
        $authorId = $_POST['userId'];
        //get the user object...
        $user = new User();
        $userObj = $user->getUserUsingUserId($authorId);
        //var_dump($userObj);
        $authorName = $userObj->user_full_name;
        //echo $authorName;
	$data = array();
	$postDate = date("Y-m-d h:i:sa");
	$modifiedBy = Session::get(Config::get('session/session_name'));
	
	
	//now try to save the content to the database...
	$event = new Event();
	$event->setTitle($title);
        $event->setAuthor($authorName);
        $event->setPostDate($postDate);
	$event->setEventDetail($eventDetail);	
	$event->setModifiedBy($modifiedBy);
	$event->setModificationDate($postDate);
        //var_dump($event);
	
	$saveEventContentObj = new Event();
	$saveEventContentObj->save($event);
	
	$data['success'] = true;
	$data['message'] = "<div class='alert alert-success alert-dismissable'>" .
			"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>" .
			"Event saved successfully!..." .
			"</div><br/>";
	
	echo json_encode($data);         
        //echo $data;
?>