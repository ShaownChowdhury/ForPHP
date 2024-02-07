<?php

session_start();
include "./db/env.php";

$id = $_REQUEST["id"];
$query = "SELECT * FROM post WHERE id= $id";
$result = mysqli_query($conn,$query);

$post = mysqli_fetch_assoc($result);

// for showing 404
if($post){

}else {
    header("location:./Controller/404.php");
}

// echo "<pre>";
// print_r($post);
// echo "</pre>";

// exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
<!-- nav bar starts here -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Post System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./allPosts.php">All Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- nav bar ends here -->

<!-- form  -->
    <div class="card col-lg-5 mx-auto mt-5">
        <div class="card-header">
            <b>Title: </b>    
            <?= $post['title']?> 
        </div>

        <div class="card-body">
            <b> Details: </b>
            <?= $post['detail']?>   
        </div>

        <div class="card-footer">
            <b>Author: </b>
            <img style="width: 30px;height: 30px; border-radius:50%;object-fit:cover" src="https://api.dicebear.com/7.x/initials/svg?seed=<?= $post['author']?>" >
            <?= $post['author']?>
        </div>
    </div>
<!-- form ends -->




    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>




<?php

session_unset();

?>

