<?php

session_start();
include "./db/env.php";

$query = "SELECT * FROM posts";
$res = mysqli_query($conn,$query);
$posts = mysqli_fetch_all($res,1);

// echo "<pre>";
// print_r($posts);
// echo "</pre>";

// exit;



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

    <div class="card col-lg-5 mx-auto mt-5">
        <div class="card-header"> All Posts</div>
        <div class="card-body">

                <table class ="table">
                    <tr>
                        <th>#</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Detail</th>
                        <th>Customize</th>
                    </tr>
                    
                    <?php
                    if(count($posts) > 0) {
                     foreach($posts as $key=> $post){
                     ?>
                     <tr>
                        <td><?= ++$key ?> </td>
                        <td><?= $post['title']?> </td>
                        <td><?= $post['detail']?> </td>
                        <td><?= $post['author']?> </td>
                        <td>
                            <div class="btn-group">
                              <a class=" btn text-white btn-sm bg-warning" href="./showPosts.php?id=<?= $post['id']?>"> Show </a>
                              <a class=" btn text-white btn-sm bg-primary" href="./editPosts.php?id=<?= $post['id']?>"> Edit </a>
                              <a class=" btn text-white btn-sm bg-danger" href="#"> Delete </a>

                            </div>
                        </td>
                    </tr>

                     <?php
                     }
                    ?>
                    <?php
                    }else{ ?>
                        <tr>
                        <td colspan=5; class="text-center";><h5>Sorry,No posts found 🤷‍♀️</h5></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

<?php

session_unset();

?>