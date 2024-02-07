<?php 

// "",false,null,0 == empty 
// isset is opposite of empty

// $userName = "Shaown Chowdhury";
// var_dump(empty($userName) );
// var_dump(isset($userName));


// implode = array > string

// $words =[ 
// "I",
// "love",
// "Bangladesh"
// ];

// echo (implode("++",$words));

// $numbers = [
//     "01830118393",
//     "01830118393",
//     "01830118393",
//     "01830118393",
//     "01830118393",
//     "01830118393",
// ];
// echo (implode("<br>",$numbers) );

// EXPLODE

// $msg = "I am Shaown Chowdhury";
// //var_dump(explode(" ", $msg) );
// $array = explode(" ", $msg);
// print_r($array);

// $fileName = "text.jpg.mp4.txt.mp3";
// $fileArray = explode(".",$fileName);
// $ext = end($fileArray);
// echo $ext;

// if ($ext == "jpg"){
//     echo "Proceed";
// } else {
//     echo "Not proceed";
// };

// $newArray = array_reverse($fileArray);

// print_r($newArray);

// if (($newArray)[0] == "jpg"){
//     echo "Proceed";
// } else {
//     echo "Not proceed";
// };

// print_r($fileArray);
// if ($fileName[2] == "jpg"){
//     echo "Proceed";
// } else {
//     echo "Not proceed";
// };

//$api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";
//$vidUrl = "https://youtu.be/heJnXtPelJQ?si=SXvniDnG4QKxoVjo"; //video 1
//$vidUrl ="https://youtu.be/FnPG_CtvIqo?si=9qhQT_nzpVpx9NVx"; //video 2

// $mainUrl = explode("?si=", $vidUrl);
// $vidArray = explode("/", $mainUrl[0]);
// $vidId = end($vidArray);

// //print_r($vidId);
// $url = str_replace("<insert-youtube-video-id-here>",$vidId,$api);
// echo("<img src ='$url'>");

// print_r ($mainUrl);
//print_r($vidArray ) ;
//print_r($mainUrl);

// HOME WORK 

$api = "https://img.youtube.com/vi/<insert-youtube-video-id-here>/maxresdefault.jpg";
$vidUrl ="https://youtu.be/2kab91mDojo?si=ElTSVbLDDL8WDsuz"; //video 3
$mainUrl = explode("?si=",$vidUrl);
$vidArray = explode("/",$mainUrl[0]);
$vidId = end($vidArray);
// print_r($mainUrl)
// print_r($vidArray);
// print_r($vidId);

$url = str_replace("<insert-youtube-video-id-here>",$vidId,$api);
// print_r(str_replace("<insert-youtube-video-id-here>",$vidId,$api));
// print_r($url);
echo "<img src='$url'>";


// COMPACT
// $user = [
//     "Shaown Chowdhury",23
// ];
// $hobby = [
//     "Playing Cricket",
// ];
// $res = compact("user","hobby");
// print_r($res)


// $numbers = [
//     "01830118393",
//     "01830118393",
//     "01830118393",
//     "01830118393",
//     "01830118393",
//     "01830118393",
// ];
// echo count($numbers);
// echo sizeof($numbers);

// array_diff == difference
// $user = [
//     "Shaown Chowdhury",23
// ];
// $hobby = [
//     "Shaown Chowdhury",24,23
// ];
// $diffArray = array_diff($hobby,$user);
// print_r($diffArray);

// $num1 = [
//     50,100,200,300 
// ];
// $num2 = [
//     50,150,200,360 
// ];
// $diff1 = array_diff($num1,$num2);
// $diff2 = array_diff($num2,$num1);
// $newArray = array_merge($diff1,$diff2);
// print_r($diff2);
// print_r($newArray);

// array_intersect = common things
// $shaown = [
//     "Shaown Chowdhury",
//     "24",
//     "Chittagong College"
// ];
// $shuvo = [
//     "Shuvo Chowdhury",
//     "30",
//     "Chittagong College"
// ];
// $newArray= array_intersect($shaown, $shuvo);
// //$newArray= count(array_intersect($shaown, $shuvo));
// print_r($newArray);

// array_pop=delete data form last
// array_push= add data in last 
// $shaown = [
//     "Shaown Chowdhury",
//     "24",
//     "Chittagong College"
// ];
// // array_pop($shaown);
// array_push($shaown,"session"); 
// $shaown[] = "Department";
// // print_r(array_pop($shaown));
// print_r($shaown);

// array shift == delete from start
// array unshift == add in start 
// $shaown = [
//     "Shaown Chowdhury",
//     "24",
//     "Chittagong College"
// ];
// array_shift($shaown);
// array_unshift($shaown, "santosh");
// print_r($shaown);

// ARRAY RANDOM == randomly shows data from array
// ARRAY REVERSE == reverse the array
// $shaown = [
//   "Name"=> "Shaown Chowdhury",
//   "Age"=>  "24",
//   "Institution"=>  "Chittagong College"
// ];
// print_r(array_rand($shaown));
// print_r(array_reverse($shaown));

// in array == find data from array and shows true false
// array search == find data and shows index and data
$shaown = [
    "Name"=> "Shaown Chowdhury",
    "Age"=>  "24",
    "Institution"=>  "Chittagong College"
  ];
// print_r(in_array("24",$shaown));
// var_dump(in_array("24",$shaown));
// var_dump(array_search("24",$shaown));

// $accepted = [
//     "jpg",
//     "png",
//     "ext",
//     "svg"
// ];
// $ext= "ext";
// var_dump(in_array($ext, $accepted));
// var_dump(array_search ($ext, $accepted));



// $num = [
//     10,20,30,40,40,50,2,1
// ];
// $filter1= array_filter($num, function ($data){
//     if ($data > 40){
//         return $data;
//     }
// });
// var_dump($filter1);
// var_dump(array_slice($num,2));

// $num = [
//     10,20,30,40,40,50,2,1
// ];
// sort($num);

// $shaown = [
//   "Name"=> "Shaown Chowdhury",
//   "Age"=>  "24",
//   "Institution"=>  "Chittagong College"
// ];
// asort($shaown);
// arsort($shaown);

// rsort($num);
// print_r($num);
// print_r($shaown);



// $num1 = [
//     50,100,200,300 
// ];
// $num2 = [
//     50,150,200,360 
// ];
// $diff1 = array_diff($num1,$num2);
// $diff2 = array_diff($num2,$num1);
// $newArray = array_merge($diff1,$diff2);
// // print_r($diff2);
// sort($newArray);
// print_r($newArray);

?>