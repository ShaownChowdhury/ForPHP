<?php

// Ex - 1
// for($i=1;$i<=10;$i++){
//     echo "Hello Everyone <br>";
// };

?>
<!-- Ex - 2
<select>
    <option> Select One </option>
 <?php
    for($i=1990;$i<=2023;$i++){
    echo "<option>$i <br></option>";
};
?>

</select> -->

<?php

// // Ex- 3
//  $num=10;
//  for($i=1;$i<=10;$i++){
//     $result= $num*$i;
//     echo "$num*$i=$result <br>";
// };

// Ex - 4
// $array= [
//     "Name",
//     "Age",
//     "Institute",
//     12,
//     "Chittagong"
// ];
// $len = count($array);
// for($i=0;$i<$len;$i++){
//     echo $array[$i]. "<br>";
// };

// Ex- 5
// for($i=1;$i<=10;$i++){
//  $test = str_repeat("*",$i);
//  echo $test . "<br>";
// };
// for($i=10;$i>=1;$i--){
//     $test = str_repeat("*",$i);
//     echo $test . "<br>";
//    };


// Ex - 5
// $num=10;
// for($i=1;$i<=$num;$i++){
//     for($n=1;$n<=10;$n++){
//         $result=$i*$n;
//         echo "$i*$n=$result <br><br>";
//     };
// }

//Ex - 6
// $array= [
//         [
//             "Name"=> "Shaown Chowdhury",
//             "Age"=> 23
//         ],
//         [
//             "Name"=> "Shuvo Chowdhury",
//             "Age"=> 23
//         ],
//         [
//             "Name"=> "Bandhon Chowdhury",
//             "Age"=> 23
//         ]
// ];
// $len = count($array);
// for($i=0;$i<$len;$i++){
//     echo $array[$i]['Age']. "<br>";
// };


// Ex - 7 
// $class =[
//     "Class1",
//     "class2",
//     "Class3"
// ];

// foreach($class as $key=> $cla){
//     echo $key ." ". $cla ."<br>";
// };


// GET , POST, REQUEST

// echo "<pre>";
// // print_r($_REQUEST);
$get = $_GET;
// print_r($get['fname']);
// echo "</pre>";

// if($get['fname']=="Shaown Chy"){
// echo "Hi, ". $get['fname'];
// }else{
//     echo $get['fname'].","."Please,Enter your correct name";
// };

if($get['fname']=="Shaown Chy"){
   if($get['pass']==1234){
      echo "<b>". $get['fname']." , Your log in success". "</b>";
   }else {
      echo "Sorry,Login failed";
   }}
else {
      echo "Enter the correct user name";
   };



?>


