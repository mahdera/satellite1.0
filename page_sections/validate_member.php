<?php
    require_once '../core/init.php';
    
    $errors = array();
    $data = array();
    
    //now get the values from the caller jquery code...
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //make sure the variables are not empty...
    if($email != "" && $username != "" && $password != ""){
        //now check if a user exists with the given email, username and password...
        $user = new User();
        if($user->login($username, $email, $password)){
            //now check if this particular admin exists in the database....
            $data['success'] = true;
            $data['message'] = 'Success!';    
            echo json_encode($data);//returns json representation of the data value.....        
        }else{
            echo 'Failed to login';
        }
        
    }//end if...condition checker
?>

