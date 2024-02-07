<?php
session_start();



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
        <div class="card-header">Add Post</div>
        <div class="card-body">

        <form action="./Controller/collectPost.php" method="POST">

            <input value="<?= $_SESSION['old']['title'] ?? '' ?>" name="title" type="text"  placeholder="Post Title" class="form-control my-3">
            <?php
              if(isset($_SESSION['errors']['title_error'])){ 
            ?>
                <span class="text-danger">
                <?= $_SESSION['errors']['title_error'] ?>
                </span>
            <?php 
                };
            ?>
            

            <textarea name="details" class="form-control my-3" placeholder="Post Details"><?= $_SESSION['old']['details'] ?? '' ?></textarea>

            <?php
              if(isset($_SESSION['errors']['detail_error'])){ 
            ?>
                <span class="text-danger">
                <?= $_SESSION['errors']['detail_error'] ?>
                </span>
            <?php 
                };
            ?>
                

            <input value="<?= $_SESSION['old']['author'] ?? '' ?>" name="author" type="text" placeholder="Post Author" class="form-control my-3">
            <button type ="submit" class="btn btn-primary">Submit</button>
              <br>
            <span class= "text-success">
              
              <?= isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>

            </span>
        </form>            
        </div>
    </div>
<!-- form ends -->




    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>




<?php

session_unset();

?>

