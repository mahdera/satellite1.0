<?php
    //now get the form values...
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $organization = $_POST['organization'];
    $description = $_POST['description'];
    $userType = "Member";
    
    //echo $firstName.' '.$lastName.' '.$email.' '.$organization.' '.$description;
    require_once '../core/init.php';
    
    $member = new Member();
    $member->setFirstName($firstName);
    $member->setLastName($lastName);
    $member->setOrganization($organization);
    $member->setDescription($description);
?>
