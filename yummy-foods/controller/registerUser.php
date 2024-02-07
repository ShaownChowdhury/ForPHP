<?php
session_start();
include "../database/env.php";

$firstName = $_REQUEST['fname'];
$lastName = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirmPassword = $_REQUEST['confirmPassword'];

// var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));
// exit;


// errors
$errors = [];

// data validation

// title error
if(empty($firstName)){
    $errors['name'] = "Your first name is missing";
} 

// email error
if(empty($email)){
    $errors['email'] = "Your email address is missing";
} else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Your email address is invalid";
}

// password error
if(empty($password)){
    $errors['password'] = "Your password is missing";

}else if(strlen($password) < 8){
    $errors['password'] = "Your password has to more than 8 digit";

}

// confirm password error
if(empty($confirmPassword)){
    $errors['confirmPassword'] = "Your repeat password is missing";

}else if($password != $confirmPassword){
    $errors['confirmPassword'] = "Password did not match!";
}

// if error found 
if(count($errors) > 0){
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_REQUEST;
    header('Location: ../backend/register.php');
}else{
    //register
    // header('Location: ../backend/register.php');
    // $_SESSION['msg']= "Registration completed 🤡";
    $encPass = password_hash($password,PASSWORD_BCRYPT);
    $query = "INSERT INTO users(fname, lname, email, password) VALUES ('$firstName','$lastName','$email','$encPass')";
    $response = mysqli_query($conn,$query);
   
    // successfully register
    if($response){
        header('location: ../backend/login.php');
    }
}















?>