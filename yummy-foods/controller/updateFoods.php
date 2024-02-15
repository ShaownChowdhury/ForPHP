<?php


session_start();
include_once "../database/env.php";

$title = $_REQUEST['title'];
$detail = $_REQUEST['detail'];
$category = $_REQUEST['category'];
$price = $_REQUEST['price'];
$food_image = $_FILES['food_image'];
$id = $_REQUEST['id'];
$extension = pathinfo($food_image['name'])['extension'] ?? null ;
$acceptedTypes = ['jpg','png','jpeg'];


// print_r($id);


// ERRORS
$errors = [];

// IMAGE VALIDATION
// if(!file_exists("../uploads/food/$food_image") ){
//     $errors['food_image'] = "No food image found";
// }
// else if(!in_array($extension,$acceptedTypes)){
//     $errors['food_image'] = "Please select an image with the extenstion of jpg,jpeg or png";
// }

// IF NO ERRORS FOUND
if(count($errors)>0){
    $_SESSION['errors']= $errors;
    header("Location:../backend/editFood.php?id=$id");
}else{
    // image upload
    $path = "../uploads/food";

    if(!file_exists($path)){
        mkdir($path);
    }
    // IMAGE NAME 
    $imageName = "food-". uniqid() . ".$extension";
  
    // move upload image
    $upload = move_uploaded_file($food_image['tmp_name'],"$path/$imageName");

    // database 
    if($upload){
        $query = "UPDATE foods SET category='$category',title='$title',detail='$detail',price='$price',food_image='$imageName' WHERE id=$id";
        $res = mysqli_query($conn,$query);
        
        // if($res){
        //     header("location:../backend/addFood.php");
        // }
        $res && header("location:../backend/allFoods.php");
    }else{
        $query = "UPDATE foods SET category='$category',title='$title',detail='$detail',price='$price' WHERE id=$id";
        $res = mysqli_query($conn,$query);
        
        $res && header("location:../backend/allFoods.php");
    }
    
    }






?>