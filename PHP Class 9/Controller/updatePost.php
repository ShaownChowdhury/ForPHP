<?php
session_start();
include "../db/env.php";

// DATA COLLECTION 
$title = $_REQUEST['title'];
$details = $_REQUEST['details'];
$author = $_REQUEST['author'];
$id = $_REQUEST['id'];


// ERRORS
$errors = [];

// DATA VALIDATION 

// TITLE VALIDATION
if(empty($title)){
    $errors['title_error']= "Title is empty";
}
// DETAILS VALIDATION
if(empty($details)){
    $errors['details_error']= "Details is empty";
}
// AUTHOR VALIDATION
if(strlen($author) > 60 ){
    $errors['author_error']= "Your name is too long!";
}

// CHECK ERRORS 
if(count($errors) > 0 ){
    //* redirect
    $_SESSION['errors'] = $errors;
    header("location: ../editPosts.php?post_id=$id");

}else {
    //* proceed
    $query = "UPDATE post SET title='$title',detail='$details',author='$author' WHERE id =$id";
    $res = mysqli_query($conn, $query);
    var_dump($res);

    if($res){
        header("location: ../allPosts.php");
    }
 }





?>