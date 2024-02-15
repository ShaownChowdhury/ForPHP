<?php
include_once "../backend/backendLayout/header.php";
include "../database/env.php";

$foodQuery = "SELECT * FROM foods WHERE status=true";
$foodRes = mysqli_query($conn,$foodQuery);
$foods = mysqli_fetch_all($foodRes,1);

// echo "<pre>";
// print_r($foods);
// echo "</pre>";

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card">
                <div class="card-header">
                    <h5>All Food Items</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                      <tr>
                        <th>Serial</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Food image</th>
                        <th>Detail</th>
                        <th>Price</th>
                        <th>Action</th>
                        
                        
                      </tr>
                      <?php
                        foreach($foods as $key=>$food){
                        ?>
                          <tr>
                            <td><?= ++$key ?></td>
                            <td><?= ucwords($food['category']) ?></td>
                            <td><?= ucwords($food['title']) ?></td>
                            <td>
                                <img width="100" src="../uploads/food/<?=$food['food_image'] ?>" alt="food_image">
                            </td>
                            <td><?= $food['detail'] ?></td>
                            <td><?= $food['price'] ?> Taka Only</td>
                            <td>
                                <div class="btn-group">
                                    <a href="./editFood.php?id=<?=$food['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="../controller/deleteFood.php?id=<?=$food['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
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
</section>


<?php
include_once "../backend/backendLayout/footer.php";

?>