<?php
require "function.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];

$email = $_POST["email"];
$mobile = $_POST["mobile"];

$subject = $_POST["subject"];
$message = $_POST["message"];

// echo $fname;
// echo $lname;

// echo $email;
// echo $mobile;

// echo $subject;
// echo $message;


if(empty($fname)){
echo "Enter your first name";
}else if(empty($lname)){
    echo "Enter your last name";
}else if(empty($email)){
    echo "Enter your email";
}else if(empty($mobile)){
    echo "Enter your mobile";
}else if(empty($subject)){
    echo "Enter inquire subject";
}else if(empty($message)){
    echo "Enter inquire massage";
}else{
    addInquiry($fname,$lname,$subject,$message,$email,$mobile);
    echo "1";
}