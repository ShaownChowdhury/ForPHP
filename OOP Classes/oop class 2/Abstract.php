<?php

abstract class A{
    public $name;

    abstract protected function calc($a,$b);
}

 class B extends A{
    public $name;

    public function calc($a,$b){
     echo $a + $b;
    }
}

$test = new B();

$test->calc('10','20');







?>