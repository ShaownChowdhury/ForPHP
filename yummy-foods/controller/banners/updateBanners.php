<?php


session_start();
include_once "../../database/env.php";

$title = $_REQUEST['title'];
$details = $_REQUEST['details'];
$btn_title = $_REQUEST['btn_title'];
$btn_link = $_REQUEST['btn_link'];
$video_url = $_REQUEST['video_url'];
$store_btn = $_REQUEST['store_btn'];
$featured_img = $_FILES['featured_img'];
$id = $_REQUEST['id'];

$query = "UPDATE banners SET heading='$title',details='$details',button_title='$btn_title',button_url='$btn_link',video_url='$video_url',featured_img='$featured_img' WHERE id=$id";
$connect = mysqli_query($conn,$query);


$errors =[];
// errors
if(empty($title)){
    $errors['title_error'] = "its a error";
}
if(empty($details)){
    $errors['detail_error'] = "its a error";
}
if(count($errors)>0){
    $_SESSION['errors'] = $errors;
    header("location:../../backend/editBanners.php?id=$id");

}

print_r($errors);







?>