<?php
session_start();

include "./db/env.php";

$query = "SELECT * FROM post";
$res = mysqli_query($conn, $query);
$post = mysqli_fetch_all($res,1);



// echo "<pre>";
// var_dump (count($posts));
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
        <div class="card-header">Add Post</div>
        <div class="card-body">

        <table class="table">
            <tr>
                <th>#</th>
                <th>Author</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Customize</th>
            </tr>
             <?php

             if(count($post) > 0){
                foreach($post as $key=> $post){ 
                    ?>
                
                <tr>
                    <td><?= ++$key ?></td>
                    <td><b>
                     <img style="width: 40px;height: 40px; border-radius:50%;object-fit:cover" src="https://api.dicebear.com/7.x/initials/svg?seed=<?= $post['author']?>" alt="">    
                     <?= $post['author'] ?> </b>
                    </td>
                    <td><?= $post['title'] ?> </td>
                    <td><?= strlen($post['detail']) >15 ? substr($post['detail'],0,15)."..." : $post['detail'] ?> </td>
                    
                    <td>
                      <div class="btn-group">
                        <a class=" btn text-white btn-sm bg-warning" href="./showPosts.php?id=<?= $post["id"] ?>"> Show </a>
                        <a class=" btn text-white btn-sm bg-primary" href="./editPosts.php?post_id=<?= $post["id"] ?>"> Edit </a>
                        <a class=" btn text-white btn-sm bg-danger" href="./Controller/deletePost.php?id=<?= $post["id"] ?>"> Delete </a>
                      </div>
                    </td>
                </tr>
                <?php
                };
                } else { 
                ?>
                <tr>
                <td colspan=5; class="text-center"><h5>Sorry,No posts found 😞</h5></td>
                </tr>
                <?php 
                };
                ?>
             
        
        </table>  


        </div>
    </div>
<!-- form ends -->




    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</body>
</html>




<?php

session_unset();

?>

