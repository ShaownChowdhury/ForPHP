<?php
include_once "../backend/backendLayout/header.php";

?>
<section>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                   <div class="card-header">Banner info</div>
                   <div class="card-body">
                   <form enctype="multipart/form-data" action="../controller/foodStore.php" method="POST">  
                     <div class="row">
                               <div class="col-lg-6">
                                   <label class="d-block" for="profileInput"><img style="max-width:100%" class="profileImage" src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png" alt=''></label>
                                       <input name="food_img"  class="d-none" type="file" id="profileInput">
                                       <span class="text-danger">
                                           <?= $_SESSION['errors']['food_img'] ?? '' ?>
                                       </span>
                               </div>
                               <div class="col-lg-6">
                                   <input type="text" class="form-control" name="title" placeholder="Food Name">
                                   <textarea name="detail" class="form-control my-3" placeholder="Food Detail"></textarea>
                                   <input type="text" class="form-control my-3" name="price" placeholder="Food Price Title">
                                   
                                   <select name="category" id="" class="form-control my-3">
                                    <option disabled selected>Select an category</option>
                                   </select>

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