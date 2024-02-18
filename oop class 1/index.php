<?php


class Car{
    //property
    //access modifier
    // public $carName;
    // public $speed = 'normal';
    // public $type = 'normal';
    
     
    // magic methods
    // contruct methods
    // function __construct()
    // {
    //     echo "I am running first <br>";
    function __construct(
        public string $carName,
        public string $speed,
        public string $type,
        private string $color
        )
    {
        // $this->carName = $carName;
        // $this->speed = $speed;
        // $this->type = $type;
    }
    // }
    // function __destruct()
    // {
    //     echo "I am running last <br>";
    // }

    // methods
    function goingForward(){
        echo "The $this->carName is going $this->speed <br>";
    }
    function goingBackward(){
        echo "The $this->carName is going Backward <br>";
    }
    function getCarType(){
        echo "The $this->carName is $this->type <br>";
    }

}

$tesla = new Car('tesla x10','200km','electric','color');
// print_r($tesla);

$tesla->carName;

$tesla->goingForward();

$tesla->goingBackward();

$tesla->getCarType('quick');




// $toyota = new Car;

// $toyota->carName='Special toyota';

// $toyota-> goingForward();

// $toyota-> goingBackward();



?>