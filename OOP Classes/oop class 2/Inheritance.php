<?php

class employee{
    public $name;
    public $age;
    public $salary;

    // CONSTRUCTOR
    function __construct($name,$age,$salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function info(){
        echo "<h3>Employee info</h3>";
        echo "Employee Name : ".$this->name ."<br>";
        echo "Employee age : ".$this->age ."<br>";
        echo "Employee salary : ".$this->salary;
    }
}
// INHERITANCE
class manager extends employee{
    public $monthlyBonus= 2000;
    public $yearlyBonus= 6000 ;
    public $totalBonus ;


    function info(){
        $this->totalBonus= $this->monthlyBonus + $this->yearlyBonus + $this->salary;

        echo "<h3>Manager info</h3>";
        echo "Manager Name : ".$this->name ."<br>";
        echo "Manager Age : ".$this->age ."<br>";
        echo "Manager Salary : ".$this->totalBonus;
    }
}

$e1 = new employee('Shaown',23,10000);
$e2 = new manager('Shuvo',29,20000);


$e1->info();
$e2->info();








?>
