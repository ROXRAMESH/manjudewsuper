<?php
require "../config/database.php";
$id = $_POST["id"];

Database::iud("DELETE FROM `inquire` WHERE `inquire_id`='".$id."'");
echo 1;