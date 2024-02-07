<?php

include "../../database/env.php";
$id = $_REQUEST['status_id'];


$queryStatus = "SELECT status FROM banners WHERE id=$id";
$res = mysqli_query($conn,$queryStatus);
$test = mysqli_fetch_assoc($res);

// echo "<pre>";
// print_r($test['status']);
// echo "</pre>";

if($test['status'] == 1){
    $status = "UPDATE banners SET status= 0 WHERE id=$id";
    mysqli_query($conn,$status);
    
}else {
    $status = "UPDATE banners SET status= 0";
    mysqli_query($conn,$status);
   
    $status = "UPDATE banners SET status= 1 WHERE id=$id";
    mysqli_query($conn,$status);
   
    
}
header("location:../../backend/allBanners.php")



?>