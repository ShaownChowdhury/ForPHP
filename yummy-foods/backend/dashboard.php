<?php

include_once "./backendLayout/header.php";

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Welcome to our dashboard <?= ucwords($_SESSION['auth']['fname']) ?? '' ?> 🎉 </h1>

</div>
<!-- /.container-fluid -->

<?php

include_once "./backendLayout/footer.php";

?>