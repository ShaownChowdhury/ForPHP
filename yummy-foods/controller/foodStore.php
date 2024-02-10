<?php
session_start();
include "../database/env.php";

$foodImage = $_FILES['food_img'];
$title = $_REQUEST['title'];
$category = $_REQUEST['category'];
$detail = $_REQUEST['detail'];
$price = $_REQUEST['price'];
$extension = pathinfo($foodImage['name'])['extension'] ?? null ;
$acceptedTypes = ['jpg','png','jpeg'];

// ERRORS
$errors = [];

// IMAGE VALIDATION
if($foodImage['size']== 0){
    $errors['food_img'] = "Please select a image !";
}else if(!in_array($extension,$acceptedTypes)){
    $errors['food_img'] = "Please select an image with the extenstion of jpg,jpeg or png";
}

// IF NO ERRORS FOUND
if(count($errors)>0){
    $_SESSION['errors']= $errors;
    header('Location:../backend/addFood.php');
}else{
    // image upload
    $path = "../uploads/food";

    if(!file_exists($path)){
        mkdir($path);
    }
    // IMAGE NAME 
    $imageName = "menu-". uniqid() . ".$extension";
  
    // move upload image
    $upload = move_uploaded_file($foodImage['tmp_name'],"$path/$imageName");

    // database 
    if($upload){
        $query = "INSERT INTO foods(category, title, detail, price, food_image) VALUES ('$category','$title','$detail','$price','$imageName')";
        $res = mysqli_query($conn,$query);
        
        // if($res){
        //     header("location:../backend/addFood.php");
        // }
        $res && header("location:../backend/addFood.php");
    }
    
    }

    



// echo '<pre>';
// print_r($imageName);
// echo '</pre>';












?>