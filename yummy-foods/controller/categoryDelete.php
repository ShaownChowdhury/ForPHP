<?php


include_once '../database/env.php';

$id = $_REQUEST['id'];

// DELETE
$query = "DELETE FROM categories WHERE id=$id";
$res = mysqli_query($conn,$query);
if($res){
  header("location: ../backend/categories.php");
}


?>