<?php
/*
include_once  "./Helpers/ImageUpload.php";
 class Human{

       use ImageUpload;
    //  private  $userName;

      public static $votingAge = 20;
      public static $name = "Human";
    


      function __construct(
        private $userName,
        private $age = 18,
        ){
         //  $this->userName=$userName; 
      }
       
      public function uploadProfileImage(){
            $this->profileImageUploader();
        }
      }
      *?
/*
      public  function getName() : void{
         echo " i am  $this->userName";

     } 

     public function canVote(){
        echo "yes,if you are ".self::$votingAge.", you can vote";
     }
    public static function greting(){
         echo "Hello There," . self::$name;
    }
*/


 
 /*

 class Banner  {
    use ImageUpload;
    public function uploadProfileImage(){
        $this->profileImageUploader();
 }
 }
 
$human=new Banner('Rumi');
echo $human->uploadProfileImage();

/*
 $badhon = new Human('badhon');

 $badhon->getName();

 $rumi = new Human('rumi');

 $rumi->getName() ;
*/
//$chatGpt = new Human('Rumi');
//echo $chatGpt->votingAge;
//echo Human::greting('badhon');
/*
class Robot extends AI{

}

*/
//echo AI::gretingHuman();

?>
<?php
use Testing\Tester;
use Controller\Models\Database\Ebn;
use Controller\App\Human;
use Controller\Models\Test;

//include_once "./Controller/App/Human.php";
//include_once "./Controller/Models/Test.php";

spl_autoload_register(function($className){
    include_once $className.".php";
});

$human = new Human();
$human->getName();
$human = new Ebn();
$human->getName();
$test = new Test();
$test->getName();
$test = new Tester();
$test->getName();

?>