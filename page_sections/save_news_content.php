<?php
	require_once '../core/init.php';
	$title = $_POST['title'];
	$newsDetail = htmlspecialchars($_POST['newsDetail']);
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
	$news = new News();
	$news->setTitle($title);
        $news->setAuthor($authorName);
        $news->setPostDate($postDate);
	$news->setNewsDetail($newsDetail);	
	$news->setModifiedBy($modifiedBy);
	$news->setModificationDate($postDate);
	
	$saveNewsContentObj = new News();
	$saveNewsContentObj->save($news);
	
	$data['success'] = true;
	$data['message'] = "<div class='alert alert-success alert-dismissable'>" .
			"<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>" .
			"News saved successfully!..." .
			"</div><br/>";
	
	echo json_encode($data);
?>