<?php

session_start();

include "../db/env.php";


// GET DATA
$title = $_REQUEST['title'];
$details = $_REQUEST['details'];
$author = $_REQUEST['author'];

// ERRORS
$errors = [];

//DATA VALIDATION

// TITLE 
if(empty($title)){
    $errors['title_error'] = "title koi?";
}else if(strlen($title) > 10 ){
    $errors['title_error'] = "ar koto?";
}
// DETAIL 
if(empty($details)){
    $errors['detail_error'] = "details koi?";
}

// ERROR > 0
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_REQUEST;
    // redirection
    header("location: ../index.php");
}else{
$query = "INSERT INTO posts(title, detail, author) VALUES ('$title','$details','$author')";
$res = mysqli_query($conn, $query);

if($res){
    header("location: ../index.php");
    $_SESSION['msg'] = "Your data has been entered 😊";
}
}


?>