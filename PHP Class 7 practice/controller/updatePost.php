<?php

session_start();

include "../db/env.php";


// GET DATA
$id = $_REQUEST['id'];
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
    header("location: ../editPosts.php?id=$id");
}else{
$query = "UPDATE posts SET title='$title',detail='$details',author='$author' WHERE id=$id";
$res = mysqli_query($conn, $query);

if($res){
    header("location: ../allPosts.php");
}
}


?>