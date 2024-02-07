<?php
session_start();

include "../db/env.php";

// GET DATA 
$title = $_REQUEST['title'];
$details = $_REQUEST['details'];
$author = $_REQUEST['author'];

// DATA VALIDATION

$errors= [];



// TITLE VALIDATION
if(empty($title)){
    $errors['title_error']= "Please,enter the title";
}elseif(strlen($title) > 15){
    $errors['title_error']= "You have entered more than 6 character";
};

// DETAILS VALIDATION
if(empty($details)){
    $errors['detail_error']= "Please,enter the details";
};

// ERROR > 0
if(count($errors) > 0){
  $_SESSION['old'] = $_REQUEST;  
  $_SESSION['errors'] = $errors;

  // REDIRECTION
  header("Location: ../index.php");
}else {
    $query = "INSERT INTO post(title, detail, author) VALUES ('$title','$details','$author')";
    $res = mysqli_query($conn,$query);
    var_dump($res);
    if($res){
        $_SESSION['msg']= "<b>Your data has been inserted</b>😊";
        header("Location: ../index.php");
    }
};

?>