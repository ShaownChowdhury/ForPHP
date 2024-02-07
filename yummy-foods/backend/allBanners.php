<?php
include_once "../backend/backendLayout/header.php";
include "../database/env.php";

$query = "SELECT * FROM banners";
$res = mysqli_query($conn,$query);
$allData = mysqli_fetch_all($res,1);

// echo "<pre>";
// print_r($allData);
// echo "</pre>";
// exit();
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card">
                <div class="card-header">
                    <h5>All banners list</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover table-striped">
                      <tr>
                        <td>sn</td>
                        <td>heading</td>
                        <td>image</td>
                        <td>details</td>
                        <td>button_title</td>
                        <td>button_url</td>
                        <td>video_url</td>
                        <td>status</td>
                        <td>action</td>
                      </tr>
                      <?php
                        foreach($allData as $key=>$data){
                        ?>
                          <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $data['heading'] ?></td>
                            <td>
                                <img width="100" src="../controller/banners/uploads/<?= $data['featured_img'] ?>" alt="featured_img">
                            </td>
                            <td><?= $data['details'] ?></td>
                            <td><?= $data['button_title'] ?></td>
                            <td><?= $data['button_url'] ?></td>
                            <td><?= $data['video_url'] ?></td>
                            <td>
                                <!-- <i class="fa-solid fa-star"></i> -->
                                <a href="../controller/banners/status.php?status_id=<?=$data['id'] ?>"><i class="<?= $data['status']== 1 ? 'fa-solid': 'fa-regular' ?> fa-star"></i></a>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="./editBanners.php?id=<?= $data['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
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