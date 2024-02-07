<?php

// $test = "testing";
// if($test == "testing") {
//     echo "All are okay";
// } else {
//     echo "All are not okay";
// };

// Example - 1
// $a = 20;
// $b = 30;
// $c = 40;

// if($a > $b && $a > $c ){
//     echo "$a is greater than $b and $c";
// } else if ($b > $a && $b > $c ){
//     echo "$b is greater than $a and $c";
// } else {
//     echo "$c is greater than $a and $b";
// }


// function getGreaterNumber (){
// $a = 20;
// $b = 30;
// $c = 40;

// if($a > $b && $a > $c ){
//     echo "$a is greater than $b and $c";
// } else if ($b > $a && $b > $c ){
//     echo "$b is greater than $a and $c";
// } else {
//     echo "$c is greater than $a and $b";
// }
// }
// getGreaterNumber();

function getGreaterNumber ($a1,$b1,$c1){
    $a = $a1;
    $b = $b1;
    $c = $c1;
    
    if($a > $b && $a > $c ){
        echo "$a is greater than $b and $c";
    } else if ($b > $a && $b > $c ){
        echo "$b is greater than $a and $c";
    } else {
        echo "$c is greater than $a and $b";
    }
    }
    getGreaterNumber(100,40,80);


// Example - 2

// $userName = "testUser";
// $userPass = "123456";

// if($userName == "testUser"){
//  if($userPass == "123456"){
//     echo "Log in success";
//  } else {
//     echo "Log in fail";
//  };
// } else {
//     echo "Your name is not correct";
// };

// function checkUser ($user, $pass){
//     $userName = $user;
//     $userPass = $pass;

//     if($userName == "testUser"){
//         if($userPass == "123456"){
//            echo "<h1 >Log in success </h1>";
//         } else {
//            echo "Log in fail";
//         };
//        } else {
//            echo "Your name is not correct";
//        };
// }
// checkUser("testUser","123456");



// // Example - 3


// function getResult (){
//     $num = 51;

// if ($num % 2 == 0){
//     echo "$num is an even number";
// } else {
//     echo "$num is an odd number";
// };
// }
// getResult();



// Example - 4

// $num = 50;
// // ternary Operator
// echo $num % 2 == 0 ? "Even": "Odd";


// Example - 5 
// SWITCH 

// $num = 50;

// switch($num){
//     case 50 : 
//         echo "The number is an even number";
//         break;
//     case 40 :
//         echo "The number is an odd numver";
//         break;
// } 


// // INDEXING Array 

// $num = [20,"test"];
// //$test= array (20,50);
// //echo $num;
// echo "<pre>";
// //var_dump($num);
// print_r($num); 
// echo "</pre>";


// ASSOCIATING Array 

// $num = [
//     "Name" => "Rahim",
//     "Age" => "20",
//     "Institute" => "Chittagong University"
// ];

// echo "<pre>";
// //var_dump($num);
// //print_r($num); 
// print_r($num["Name"]. " is a student.He is ". $num["Age"] ." years old");
// echo "</pre>";



// MULTIDIMENSIONAL Array 

$test = [
    "Name" => "Rahim",
    "Age" => "20",
    "Institute" => 
     [
        "SSC"=> "2016",
        "HSC" => "2018", 
        "BSc" => "2022"
     ],
    "SocialMedia" => [
        "facebook" => "www.facebook.com/shaownchowdhury",
        "Instagram" => "www.instagram.com/the_shoawn_chy"
    ],
];

echo "<pre>";
print_r("My name is ".$test["Name"].". I am ". $test["Age"]. " years old." . " My facebook id is " . $test["SocialMedia"]["facebook"] .".");
echo "</pre>";


?>