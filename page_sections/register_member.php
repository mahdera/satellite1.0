<?php
    //now get the form values...
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $organization = $_POST['organization'];
    $description = $_POST['description'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = "Member";
    $registrationDate = date("Y-m-d h:i:sa");
    
    //echo $firstName.' '.$lastName.' '.$email.' '.$organization.' '.$description;
    require_once '../core/init.php';   
    
    $user = new User();
    $user->setUserType($userType);
    $user->setUsername($username);
    $user->setUserPassword($password);
    $user->setUserFullName($firstName.' '.$lastName);
    $user->setUserStatus('Pending');
    $user->setEmail($email);
    $user->setUserLastValidLogin(null);
    $user->setUserFirstInvalidLogin(null);
    $user->setUserFailedLoginCount(0);
    $user->setUserCreateDate($registrationDate);
    $user->setModifiedBy(0);
    $user->setModificationDate($registrationDate);    
    //now save the user object to the database...
    $saveUserObj = new User();
    $saveUserObj->save();
    
    $member = new Member();
    $member->setFirstName($firstName);
    $member->setLastName($lastName);
    $member->setOrganization($organization);
    $member->setDescription($description);
?>
