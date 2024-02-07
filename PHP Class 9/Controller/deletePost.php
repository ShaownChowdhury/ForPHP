<?php

include "../db/env.php";

$id = $_REQUEST['id'];
$query = "DELETE FROM post WHERE id = $id";
$res = mysqli_query($conn,$query);

if($res){
    header("location: ../allPosts.php");
}








?>