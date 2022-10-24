<?php
require "function.php";

$cn = $_POST["cn"];
$fb = $_POST["fb"];

if(isset($_FILES["img"])){
$img0 = $_FILES["img"];

}else{
    echo "Plese Select Image and ";
}

$allowimgext=array("image/jpg","image/jpeg","image/png","image/svg");
    

if(empty($cn)){
echo "Enter Client Name";

}else if(empty($fb)){
    echo "Enter Client Feedback";

}else if (!isset($img0)){
    echo"Insert A Image";
}else{
    $ext=$img0["type"];
    
    if(!in_array($ext,$allowimgext)){
        echo "Plese Select Valid Image";
    }else{
        $code="feedbackImages//".uniqid().$img0["name"];

        move_uploaded_file($img0["tmp_name"],$code);

        addFeedback($cn,$fb,$code);

        echo 1;

    }


}