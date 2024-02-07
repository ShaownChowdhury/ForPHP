<?php

// indexing array
// $user = ["Shaown",25, "listening to music", "full stack developer"];
// echo "<pre>";
// print_r($user[1]);
// echo "</pre";

// // associative array

// $user = [
//     "userName"=> "Shaown",
//     "age"=> 25, 
//     "hobby"=> "listening to music", 
//     "occupation"=> "full stack developer",
//     "edu" => [
//     "SSC",
//     "HSC",
//     "Hons"
//     ]
//     ];

// echo "<pre>";
// print_r($user);
// echo "</pre";


// multi dimensional array
// $user = [
//     "userName"=> "Shaown",
//     "age"=> 25, 
//     "hobby"=> "listening to music", 
//     "occupation"=> "full stack developer",
//     "edu" => [
//     "SSC",
//     "HSC",
//     "Hons"
//     ],
//     "social"=> [
//      "facebook" => [
//        "real" => "www.facebook.com",
//        "fake" => "fake.facebook.com"
//      ],
//      "insta" => [
//         "real"=> "www.instagram.com",
//         "fake"=> "www.fake.insta.com"
//      ]
//      ]
//     ];

// $user["testingData"] = "testingData2";  // adding in array
// $user["fatherName"] = "Santosh Chowdhury";
// echo "<pre>";
// print_r($user);
// echo "</pre";


$name = "Shaown chowdhury";
$email = "SHAOWNCHOWDHURYBD@GMAIL.COM";

echo strtoupper($name. "<br>");
echo strtolower($email. "<br>");
echo ucwords($name."<br>");
echo ucfirst($name. "<br>");
echo strrev($name);

// $num = 123;
// if($num == strrev($num) ){
//     echo "Yes";
// } else {
//     echo "No";
// };

// function numberChecker($num){
//     if($num == strrev($num) ){
//         echo "Yes";
//     } else {
//         echo "No";
//     };
// };
// numberChecker(999);


// function numberChecker($num){
// echo $num == strrev($num) ? "Yes" : "No";
// };
// numberChecker(99);

// $msg = "I love my mother";

// echo strpos($msg, "mother");  // string position

// $email = "SHAOWNCHOWDHURYBD@GMAIL.COM";
// if (strpos($email, "@") != false ) {
// echo "Valid email";
// } else {
// echo "Invalid email";
// };

// $msg = "I love my mother";

// var_dump( stripos($msg, "Mother") ); // i = case insensitive

// $msg = "I love my mother";
// echo substr($msg, 0, 3); // substrate

// $msg = "I love my mother";
// echo str_replace( "I", "Me" , $msg); 

// $msg = "apnar product ta khub kharap. Apnader delivery time purai fao. Apni manusta khub baje";
// $badWords = ["kharap","fao", "baje"];
// $goodWords = ["valo", "sei", "joss"];

// echo str_replace($badWords, $goodWords, $msg . "...");


//$password= " 123 ";
//var_dump(rtrim ($password) );
//var_dump(ltrim ($password) );
//var_dump( trim ($password) );


$password= " 123 ";
//var_dump(md5($password)) ;
//var_dump(sha1($password)) ;
//echo password_hash ($password, PASSWORD_BCRYPT) ; // safe
//var_dump (password_hash ($password, PASSWORD_BCRYPT)) ;

echo strlen($password); // string length

$phone = "01830118390";
echo strlen( $phone) == 11  ? "Yes,its a Valid Number " : "No,its an Invalid Number";

?>