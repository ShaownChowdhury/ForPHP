<?php

include_once "./backendLayout/header.php";

?>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="card shaodow">
                <div class="card-header">
                    Add banner
                </div>
                <div class="card-body">
                    <form action="../controller/manageBannerUpdate.php" method="POST">
                        <input name="title" class="form-control" type="text">
                        <button class="btn btn-primary mt-2 btn-sm">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow">
                <table class="table responsive">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>new</td>
                        <td>new</td>
                        <td>new</td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</div>

<?php

include_once "./backendLayout/footer.php";

?>