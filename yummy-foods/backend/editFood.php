<?php
include_once "../backend/backendLayout/header.php";

include "../database/env.php";

$id= $_REQUEST['id'];
$query = "SELECT * FROM foods WHERE id=$id";
$test = mysqli_query($conn,$query);
$res = mysqli_fetch_assoc($test);

$categoryQuery = "SELECT * FROM categories";
$categoryRes = mysqli_query($conn,$categoryQuery);
$categories = mysqli_fetch_all($categoryRes,1);

// echo "<pre>";
// print_r($res);
// echo "</pre>";

// exit();



?>
<section>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                   <div class="card-header">Food info</div>
                   <div class="card-body">
                   <form enctype="multipart/form-data" action="../controller/updateFoods.php?id=<?=$res['id'] ?>" method="POST">  
                     <div class="row">
                               <div class="col-lg-6">
                                   <label class="d-block" for="profileInput"><img style="max-width:100%" class="profileImage" src="../uploads/food/<?=$res['food_image']?? "" ?>"></label>
                                       <input name="food_image"  class="d-none" type="file" id="profileInput">
                                       <span class="text-danger">
                                           <?= $_SESSION['errors']['food_image'] ?? '' ?>
                                       </span>
                               </div>
                               <div class="col-lg-6">
                                   <input value="<?=$res['title']?? "" ?>" type="text" class="form-control" name="title" placeholder="">
                                   <span class="text-danger">
                                           <?= $_SESSION['errors']['title_error'] ?? '' ?>
                                       </span>
                                   <textarea name="detail" class="form-control my-3" placeholder="Enter Food Details"><?=$res['detail']?? "" ?></textarea>
                                   <span class="text-danger">
                                           <?= $_SESSION['errors']['detail_error'] ?? '' ?>
                                       </span>
                                       <input value="<?=$res['price'] ?>" type="text" class="form-control my-3" name="price" placeholder="Enter Food Price">
                                       <select name="category" id="" class="form-control my-3">
                                    <option disabled selected>Select an category</option>
                                     
                                   <?php 
                                    foreach($categories as $category ){
                                    ?>

                                    <option value="<?=$category['category_title'] ?>"><?=ucwords($category['category_title'])?></option>
                                    
                                    <?php
                                    }
                                   ?> 
                                   </select>
                                   
                                   <button name="update" type="submit" class="btn btn-primary">Update</button>
                               </div>
                     </div>
                   </form>
                   </div>
                   </div>
        </div>
    </div>
</section>

<?php
include_once "../backend/backendLayout/header.php";
unset($_SESSION['errors']);

?>
<script>

let profileInput = document.querySelector("#profileInput")
let profileImage = document.querySelector('.profileImage')
function updatePreviewImage(event){
    let url = URL.createObjectURL(event.target.files[0])
    profileImage.src = url;
}
profileInput.addEventListener('change',updatePreviewImage)
</script>