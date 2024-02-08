<?php

include_once "./backendLayout/header.php";
include_once '../database/env.php';

$query = "SELECT * FROM categories";
$res = mysqli_query($conn,$query);
$categories = mysqli_fetch_all($res,1);

$editedId = $_REQUEST['editedId'] ?? null ;
if($editedId){
    $query = "SELECT * FROM categories WHERE id=$editedId";
    $res = mysqli_query($conn,$query);
    $editedCategory = mysqli_fetch_assoc($res);
}

// echo "<pre>";
// print_r($categories);
// echo "<pre>";


?>

<main>
    <div class="container">
        <div class="row">
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <?=$editedId ? 'Edit':'Add' ?> Category
                </div>
                <div class="card-body">
                  <form action="../controller/<?=$editedId ? 'categoryUpdate':'categoryStore' ?>.php" method="post">
                    <input type="hidden" name="id" value="<?=$editedCategory['id'] ?? '' ?>">
                    <input value="<?=$editedCategory['category_title'] ?? '' ?>" name="category_title" type="text" placeholder="Enter Your Category Name" class="form-control">
                    <button class="btn btn-primary rounded-0 btn-sm mt-2">
                    <?=$editedId ? 'Update':'Submit' ?>
                    </button>
                  </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
        <div class="card shadow">
                <div class="card-header">
                    All Category
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                        <tr>
                            <th>#</th>
                            <th>Category Title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        

                        <?php
                          foreach($categories as $key=> $category){
                        ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= $category['category_title'] ?></td>
                                <td>
                                    <a href="../controller/categoryStatusUpdate.php?id=<?=$category['id']?>&status=<?= $category['status'] ?>" class="text-warning">
                                        <i class="fa-<?= $category['status']== 1 ? 'solid':'regular' ?> fa-star"></i>
                                        <!-- <i class="fa-regular fa-star"></i> -->
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="./categories.php?editedId=<?=$category['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="../controller/categoryDelete.php?id=<?=$category['id'] ?>" class="deleteBtn btn btn-sm btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php  
                          }
                        ?>
                    </table>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</main>

<?php

include_once "./backendLayout/footer.php";

?>
<script>

   $(function(){
    $('.deleteBtn').click(function(event){
        event.preventDefault()
        // alert 
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
            }).then((result) => {
            if (result.isConfirmed) {
                // $(this).attr('href')
                window.location.href = $(this).attr('href');
            }
        });
        // alert end
    })
   })
</script>