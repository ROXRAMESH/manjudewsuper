<?php
require "function.php";

$ut = $_POST["ut"];

if(isset($_FILES["img"])){
$img0 = $_FILES["img"];

}else{
    echo "Plese Select Image and ";
}

$allowimgext=array("image/jpg","image/jpeg","image/png","image/svg");
    

if(empty($ut)){
echo "Enter Update Details";

}else if (!isset($img0)){
    echo"Insert A Image";
}else{
    $ext=$img0["type"];
    
    if(!in_array($ext,$allowimgext)){
        echo "Plese Select Valid Image";
    }else{
        $code="updateImages//".uniqid().$img0["name"];

        move_uploaded_file($img0["tmp_name"],$code);

        addLastUpdate($code,$ut);

        echo 1;

    }


}