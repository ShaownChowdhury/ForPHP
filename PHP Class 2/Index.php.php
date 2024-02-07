<?php
 
$msg = "Hello World";
$age = "true";
$age = true;
$age = 23;
$name = "Shaown Chowdhury";


//echo $msg;

//var_dump
//var_dump($msg);
//var_dump($age);



//print and printf



//print($msg);
//print("I am $name");

//printf("I am %s", strtoupper ($name) );
//printf("I am %s. I am %d", strtoupper ($name), $age );
//printf("I am %s. I am %f", strtoupper ($name), $age );



$a = 50 ;
$b = 10;

// whole process opperation
// symbol operator
// $a , $b == opperand



// operators
/*
echo $a + $b ;
echo $a - $b ;
echo $a * $b ;
echo $a / $b ;
echo $b**2  ;
echo $a % $b ;
*/



// assignment opperators

//$a = $a + 20;
//echo $a;

/*
$a += 20;
echo $a;

$a -= 20;
echo $a;

$a *= 2;
echo $a;

$a /= 20;
echo $a;

$a %= 2;
echo $a;
*/



// Comparision opperators


$c = 10;
$d = "10";
$e = 20;


// eaual - compare value
var_dump($c == $d);

// identical - compares value and data types
var_dump($c === $d);

// not equal
var_dump($c != $e);
var_dump($c <> $e);

// not identical
var_dump($c !== $d);

// greater than ,less than 
var_dump($c > $e);
var_dump($c < $e);

// greater than or equal , less than or equal
var_dump($c >= $e);
var_dump($c <= $e);

// greater than,equal to,less than
//var_dump($c <=> $e);




// increment decrement operators

$x = 10;


/*
echo ++$x; // pre-increment
echo $x++; // post-increment
echo $x;

echo --$x; // pre-decrement
echo $x--; // post-decrement
echo $x;
*/


// Logical operators 


$f = 10;
$g = 11;
$h = 12;

var_dump ($f == 10 and $g == 11 );
var_dump ($f == 10 && $g == 11 );

var_dump ($f == 9 or $g == 11 );
var_dump ($f == 10 || $g == 11 );

var_dump ($f != 10 ); // not

var_dump ($f .= 10 and $g == 11 ); // Concetenation assignment



// user,math,eng,bangla,history

/*

$math = 80;
$eng = 60;
$bangla = 70;
$history = 50;
$user = "Rahul";

$result = ($math + $eng + $bangla + $history) / 4;
echo "Congratulatios $user ,you have got $result <br>";


function get_result() {
$math = 80;
$eng = 60;
$bangla = 70;
$history = 50;
$user = "Rahul";

$result = ($math + $eng + $bangla + $history) / 4;
echo "Congratulatios $user ,you have got $result <br>";
}
get_result();


function get_result($math_mark,$eng_mark,$bangla_mark,$his_mark,$user_name) {
    $math = $math_mark;
    $eng = $eng_mark;
    $bangla = $bangla_mark;
    $history = $his_mark;
    $user = $user_name;
    
    $result = ($math + $eng + $bangla + $history) / 4;
    echo "Congratulatios $user ,you have got $result <br>";
    }
    get_result(100,60,70,90, "Rahul");


function get_result($math_mark,$eng_mark,$bangla_mark,$his_mark,$user_name) {
    
    $result = ($math_mark+ $eng_mark+ $bangla_mark+ $his_mark) / 4;
    echo "Congratulatios $user_name ,you have got $result <br>";
    }
    get_result(100,60,70,90, "Rahul"); //arguemenmt
    get_result(90,60,70,90, "Shimul");
    get_result(70,60,70,90, "Rifat");

*/


// Condition

$a =50;

if( $a == 40){

    echo "Yes";
    }
    else {
    echo "No";
    }

$a = 50;
$b = 10;

if( $a > $b){

    echo "$a is greater than $b";
    }
    else {
    echo "$a is less than $b";
    }
    
/*
$a = 50;
$b = 10;


if( $a % 2 == 0){

    echo "$a is an even number";
    }
    else {
    echo "$a is an odd number";
    }
*/

/*
    function num_checker(){
    $a =50;

if( $a % 2 == 0){

    echo "$a is an even number";
    }
    else {
    echo "$a is an odd number";
    }
    }
 num_checker();
*/


$num= 50;
if($num > 0 ) {

    echo "Positive";
} else if ($num < 0){
    echo "Negetive";
} else {
    echo "Neutral";
};

//* marks > 100 = Invalid
//* marks 80 - 100 = A+
//* marks 70 - 79 = A
//* marks 60 - 69 = A-
//* marks 50 - 59 = B
//* marks  0 - 49 = F

$marks = 180;

if ($marks >= 80 && $marks <=100 ) {
    echo "You have got A+";
} else if ($marks >= 70 && $marks <=79){
    echo "You have got A";
} else if ($marks >= 60 && $marks <=69){
    echo "You have got A-";
} else if ($marks >= 50 && $marks <=59){
    echo "You have got B";
} else if ($marks >= 0 && $marks <=49){
    echo "You have got F";
} else {
    echo "Invalid";
}

?>