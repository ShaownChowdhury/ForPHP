<?php
session_start();
include "../database/env.php";

$oldPsk = $_REQUEST['oldPsk'];
$psk = $_REQUEST['psk'];
$confirmPsk = $_REQUEST['confirmPsk'];
$dbPsk = $_SESSION['auth']['password'];
$isPasswordTrue = password_verify($oldPsk,$dbPsk);
$id = $_SESSION['auth']['id'];
$errors = [];

if(empty($oldPsk)){
    $errors['oldPsk'] = "Old Password is required";
}
if(empty($psk)){
    $errors['psk'] = "New Password is required";
}
if(empty($confirmPsk)){
    $errors['confirmPsk'] = "Confirm Password is required";
}

else if(!$isPasswordTrue){
    $errors['oldPsk'] = 'Your old password did not match !'; 
   
}else {
    if($psk != $confirmPsk){
        $errors['confirmPsk'] = "New password and confirm password did not match";
        header("location: ../backend/profile.php");

    }
}

if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    header("location: ../backend/profile.php");
}else{
    // PROCEED
    $encPassword = password_hash($psk,PASSWORD_BCRYPT);
    $query = "UPDATE users SET password='$encPassword' WHERE id = $id"; 
    $res = mysqli_query($conn, $query);
    if($res){
        // 
        $_SESSION['auth']['password'] = $encPassword;
        header("location: ../backend/profile.php");
    }
}




?>