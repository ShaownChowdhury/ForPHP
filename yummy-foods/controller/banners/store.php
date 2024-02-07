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


if(isset($store_btn) ){
  
    $imagePath = uniqid() . '-banner-image-' . $featured_img['name'];
    $tmp_name = $featured_img['tmp_name'];
    move_uploaded_file($tmp_name,'uploads/'. $imagePath);

   
    $query = "INSERT INTO banners(heading, details, button_title, button_url, video_url, featured_img) VALUES ('$title','$details','$btn_title','$btn_link','$video_url','$imagePath')";
    $res = mysqli_query($conn,$query);
    // print_r($res);
    $_SESSION['success'] = 'Store inserted!';
    //redirect to all banner 
    header("location: ../../backend/allBanners.php");
    
}



?>
