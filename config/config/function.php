<?php
require "database.php";


function getInquiry(){



    $inquire =  Database::search("SELECT * FROM `inquire` INNER JOIN `email` ON email.email_id=inquire.email_id");
 
    if($inquire->num_rows==0){
     return False;
    }else{
 
 return $inquire;
    }
 }

 function getClientFeedback(){

    $feedback =  Database::search("SELECT * FROM `client_feedback`");
 
    if($feedback->num_rows==0){
     return False;
    }else{
 
 return $feedback;
    }
 }
 
 function getLastUpdate(){

    $lastUpdate =  Database::search("SELECT * FROM `latest_update`");
 
    if($lastUpdate->num_rows==0){
     return False;
    }else{
 
 return $lastUpdate;
    }
 }

//  This function call when finding specific inquiry from database
 
 function searchInquiry($text){

    $searchInquiry =  Database::search("SELECT * FROM `inquire` INNER JOIN `email` ON email.email_id=inquire.email_id WHERE inquire_subject LIKE '%".$text."%' OR inquire_message LIKE '%".$text."%'");
 
    if($searchInquiry->num_rows==0){
     return False;
    }else{
 
 return $searchInquiry;
    }
 }


//  Database Insert 
 


function addInquiry($fname,$lname,$subject,$massage,$email,$mobile){

   $email_id="";

   $search_email_old = Database::search("SELECT * FROM `email` WHERE `email`='".$email."'");

   if($search_email_old->num_rows==0){
      Database::iud("INSERT INTO `email` (`email`)VALUES('".$email."')");
      $search_email_id = Database::search("SELECT * FROM `email` WHERE `email`='".$email."'");
      $fetch_email = $search_email_id->fetch_assoc();
      $email_id = $fetch_email["email_id"];
   }else{
      $fetch_email = $search_email_old->fetch_assoc();
      $email_id = $fetch_email["email_id"];
   }

Database::iud("INSERT INTO `inquire` (`fname`,`lname`,`mobile_no`,`inquire_subject`,`inquire_message`,`email_id`)VALUES('".$fname."','".$lname."','".$mobile."','".$subject."','".$massage."','".$email_id."')");
return True;
}




function addFeedback($name,$feedback,$feedImg){

    Database::iud("INSERT INTO `client_feedback` (`client_name`,`feedback`,`feedback_img`)VALUES('".$name."','".$feedback."','".$feedImg."')");
    
    return True;
    
    }

    function addLastUpdate($image,$update_text){

        Database::iud("INSERT INTO `latest_update` (`update_img`,`update_text`)VALUES('".$image."','".$update_text."')");
        
        return True;
        
        }
    

   