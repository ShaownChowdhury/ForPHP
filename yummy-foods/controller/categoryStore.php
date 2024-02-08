<?php
include_once "../database/env.php";

$category_title = $_REQUEST['category_title'];
$errors = [];

// VALIDATION
// if(empty($category_title)){
//     $errors['category_title'] = 'Your category title is empty!';
// }
// if(strlen($category_title)>30){
//     $errors['category_title'] = 'Over inserted!';
// }
// if(count($errors)>0){
//     $_SESSION['errors']= $errors;
// }
// print_r($errors);


// END OF VALIDATION

// DATA INSERT
$query = "INSERT INTO categories(category_title) VALUES ('$category_title')";
$res = mysqli_query($conn,$query);

if($res){
    header("location:../backend/categories.php");
}
// END DATA INSERT


?>