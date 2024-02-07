<?php

session_start();
include "./db/env.php";

$id = $_REQUEST['id'];
$query = "SELECT *FROM posts WHERE id=$id";
$res= mysqli_query($conn,$query);
$post= mysqli_fetch_assoc($res);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
    <!-- navbar starts -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Post Sys</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Add Post</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./allPosts.php">All Posts</a>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
    <!-- navbar end -->

    <!-- form starts -->
    <div class="card col-lg-5 mx-auto mt-5">
        <div class="card-header">Edit Post </div>

        <div class="card-body">
            
        <form action="./controller/storePost.php" method="POST">

        <input value="<?= $post['title']?? ''?>" name="title" type ="text" placeholder="Post Title" class="form-control my-3">
        <!-- error -->
        <?php
        if(isset($_SESSION['errors']['title_error'])){ ?>
            <span class="text-danger">
            <?= $_SESSION['errors']['title_error'] ?>
            </span>
        <?php    
        }
        ?>
        <textarea name="details" placeholder="Post detail" class="form-control my-3"><?= $post['detail']?? ''?></textarea>
        <!-- error -->
        <?php
        if(isset($_SESSION['errors']['detail_error'])){ ?>
            <span class="text-danger">
            <?= $_SESSION['errors']['detail_error'] ?>
            </span>
        <?php    
        }
        ?>

        <input value="<?= $post['author']?? ''?>" name="author" type ="text" placeholder="Post Author" class="form-control my-3">
        <button type="submit" class="btn btn-primary">Submit</button>

        <br>
        <span class="text-success">

          <?= isset($_SESSION['msg']) ? $_SESSION['msg'] : '' ?>

        </span>

        </form>
        </div>
    </div>
    <!-- form end -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

<?php

session_unset();

?>