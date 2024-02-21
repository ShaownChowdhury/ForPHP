<?php


include "product.php";
include "testing.php";


function wow(){
    echo "wow from index file.<br>";
}

// $obj = new test\product();
$obj2 = new pro\product();


pro\wow();
wow();




?>