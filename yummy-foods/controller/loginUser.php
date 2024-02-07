<?php
session_start();
include_once "../database/env.php";

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$errors= [];

// validation
// EMAIL
if(empty($email)){
    $errors['email'] = "Please,enter your email 🙏";
}
// PASSWORD
if(empty($password)){
    $errors['password'] = "Please,enter your password 🙏";
}

// EMAIL ENTER
$query = "SELECT * FROM users WHERE email = '$email'";
$res = mysqli_query($conn,$query);

// print_r($res->num_rows);

// EMAIL NOT FOUND 
if($res->num_rows == 0){
    $errors['email'] = "Your email address is incorrect";
    $_SESSION['errors'] = $errors;
    header('location: ../backend/login.php');
    
}else {
    $dbUser = mysqli_fetch_assoc($res);
    $isPasswordTrue = password_verify($password,$dbUser['password']);

    // IF PASSWORD IS INCORRECT
    if(!$isPasswordTrue){
        $errors['password'] =  "Your password is incorrect";
        $_SESSION['errors'] = $errors;
        header('location: ../backend/login.php');
    }else{
        // redirect to dashboard
        $_SESSION['auth'] = $dbUser;
        header("location: ../backend/dashboard.php");
    }


}

?>