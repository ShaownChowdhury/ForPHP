<?php

session_start();
include "../database/env.php";

// DATA COLLECT
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$profileImage = $_FILES['profileImage'];
$extension = pathinfo($profileImage['name'])['extension'];
$acceptedTypes = ['jpg','png'];
$userId = $_SESSION['auth']['id'];


// echo "<pre>";
// var_dump();
// echo "</pre>";
// exit;

// ERRORS
$errors = [];

// data validation

// title error
if(empty($fname)){
    $errors['name'] = "Your first name is missing";
} 

// email error
if(empty($email)){
    $errors['email'] = "Your email address is missing";
} else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Your email address is invalid";
}

// profile image
// if($profileImage['size'] == 0){
//  $errors['profileImage'] = "Please select an image";
// }else if(!in_array($extension, $acceptedTypes)){
//     $errors['profileImage'] = "Please select an image with the extenstion of jpg or png ";
// }

// IF ERRORS FOUND
if(count($errors)>0){
    // REDIRECT BACK
    $_SESSION['errors'] = $errors;
    header('location: ../backend/profile.php');
}
// IF NO ERRORS FOUND 
else{
    $path = "../uploads";
    if(!file_exists($path)){
        mkdir($path);
    }
    // FILE UPLOAD
    $fileName = null;
    if($profileImage['size'] > 0 ){
        // check for prev file
        if(file_exists($path . '/' . $_SESSION['auth']['profile_img'])){
           unlink($path . '/' . $_SESSION['auth']['profile_img']);
        }


        $fileName = "user-".uniqid().".$extension";
        $from = $profileImage['tmp_name'];
        $to = $path."/$fileName";
        $isUploaded = move_uploaded_file($from,$to);
        $query = "UPDATE users SET fname='$fname',lname='$lname',email='$email',profile_img='$fileName' WHERE id= $userId";
        $res = mysqli_query($conn,$query);
    }else{

        $query = "UPDATE users SET fname='$fname',lname='$lname',email='$email' WHERE id= $userId";
        $res = mysqli_query($conn,$query);

    }
    if($res){
        $_SESSION['auth']['fname'] = $fname;
        $_SESSION['auth']['lname'] = $lname;
        $_SESSION['auth']['email'] = $email;
        if($profileImage['size'] > 0 ){
            $_SESSION['auth']['profile_img'] = $fileName;
        }

        header("location: ../backend/profile.php");
    }
     
}
?>