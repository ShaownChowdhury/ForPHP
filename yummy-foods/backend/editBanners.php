<?php
include_once "../backend/backendLayout/header.php";

include "../database/env.php";
$id= $_REQUEST['id'];
$query = "SELECT * FROM banners WHERE id=$id";
$test = mysqli_query($conn,$query);
$res = mysqli_fetch_assoc($test);

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
                   <div class="card-header">Banner info</div>
                   <div class="card-body">
                   <form enctype="multipart/form-data" action="../controller/banners/updateBanners.php?id=<?=$res['id'] ?>" method="POST">  
                     <div class="row">
                               <div class="col-lg-6">
                                   <label class="d-block" for="profileInput"><img style="max-width:100%" class="profileImage" src="../controller/banners/uploads/<?=$res['featured_img'] ?? '' ?>"></label>
                                       <input name="featured_img"  class="d-none" type="file" id="profileInput">
                                       <span class="text-danger">
                                           <?= $_SESSION['errors']['profileImage'] ?? '' ?>
                                       </span>
                               </div>
                               <div class="col-lg-6">
                                   <input value="<?=$res['heading'] ?>" type="text" class="form-control" name="title" placeholder="">
                                   <span class="text-danger">
                                           <?= $_SESSION['errors']['title_error'] ?? '' ?>
                                       </span>
                                   <textarea value="<?=$res['details'] ?>" name="details" class="form-control my-3" placeholder="Enter Banner Details"></textarea>
                                   <span class="text-danger">
                                           <?= $_SESSION['errors']['detail_error'] ?? '' ?>
                                       </span>
                                   <input value="<?=$res['button_title'] ?>" type="text" class="form-control my-3" name="btn_title" placeholder="Enter Banner Button Title">
                                   <input value="<?=$res['button_link']?? "" ?>" type="text" class="form-control my-3" name="btn_link" placeholder="Enter Banner Button Link">
                                   <input value="<?=$res['video_url'] ?>" type="text" class="form-control my-3" name="video_url" placeholder="Enter Video URL">

                                   <button name="store_btn" type="submit" class="btn btn-primary">Submit</button>
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