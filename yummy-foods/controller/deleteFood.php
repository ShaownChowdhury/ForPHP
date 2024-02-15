<?php


include_once '../database/env.php';

$id = $_REQUEST['id'];

// DELETE
$query = "DELETE FROM foods WHERE id=$id";
$res = mysqli_query($conn,$query);
if($res){
  header("location: ../backend/allFoods.php");
}


?>