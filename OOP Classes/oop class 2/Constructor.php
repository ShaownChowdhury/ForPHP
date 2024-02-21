<?php

class person{
    public $name;
    public $age ;

    // CONSTRUCTOR
    function __construct($name = "No Name" ,$age= 0)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function show(){
        echo $this->name." - ".$this->age."<br>";
    }
}

$p1 = new person();
$p2 = new person('Shuvo Chowdhury',29);
$p3 = new person('Shaown Chowdhury',24);

// $p1->name = "Shaown";
// $p1->age = 24;

echo $p1->show();
echo $p2->show();
$p3->show();






?>