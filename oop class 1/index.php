<?php


class Car{
    //property
    //access modifier
    public $carName;

    // methods
    function goingForward($carName,$speed = 'normal'){
        echo "The $carName is going $speed <br>";
    }
    function goingBackward($carName){
        echo "The $carName is going Backward <br>";
    }
    function getCarType($type){
        echo "The carName is $type <br>";
    }
}

$tesla = new Car;
// print_r($tesla);
$tesla-> goingForward('Tesla','very fast');

$tesla->carName='teslas';
echo $tesla->carName;

$tesla-> goingBackward('Tesla');


$toyota = new Car;

$toyota-> goingForward('toyota','fastly');

$toyota-> goingBackward('Toyota');



?>